const express = require("express");
const router = express.Router();
const userModel = require("../server/userSchema");

router.get("/register", (req, res) => {
    res.render("register");
});

router.post("/register", (req, res) => {

    const newUser = new userModel(req.body);
    newUser.save().then( () => {
        userModel.find({}).then( data => {
            console.log(data);
        } );
        res.render("register", {msg: "User Registered"});
    } );
});

router.get("/login", (req, res) => {
    res.render("login");
});


router.post("/login", (req, res) => {
    
    userModel.find(req.body).then( user => {
        if(user.length > 0) {
            console.log("here");
            res.redirect("/dashboard");
            return;
            
        } else {

            res.render("login", {msg: "Invalid User/Password"});
            return;
        }
    } );
});

router.get("/dashboard", (req, res) => {
    res.render("dashboard");
})



module.exports = router;