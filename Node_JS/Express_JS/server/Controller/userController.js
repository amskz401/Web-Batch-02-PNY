const userModel = require("../Model/userSchema");
const session = require("express-session");

 const registerUser = (req, res, next) => {
    
    const newUser = new userModel(req.body);
    newUser.save().then( () => {
        userModel.find({}).then( data => {
            console.log(data);
        } );
        res.render("register", {msg: "User Registered"});
        next();
    } );
};

const loginUser = (req, res, next) => {
    
    userModel.find(req.body).then( user => {
        if(user.length > 0) {
            req.session.regenerate( (err) => {
                req.session.user = user;
                console.log(setUser);
                req.session.save( (err) => {
                    res.redirect("/dashboard");
                    next();
                    return;
                } )
            } );
        } else {

            res.render("login", {msg: "Invalid User/Password"});
            next();
            return;
        }
    } );

};

const listUsers = (req, res, next) => {
    
    userModel.find({}).then( users => {
        console.log(users);
        res.render("user-list", {allUsers: users});
        next();
        return;
    } );

};

module.exports = {registerUser, loginUser, listUsers};
