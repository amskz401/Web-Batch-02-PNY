const express = require("express");
const router = express.Router();
const user = require("../server/Controller/userController");

// middleware
const checkLogin = (req, res, next) => {

    if(req.session.user) {

        next();
    } else {
        res.redirect("/login");
    }
}

router.get("/register", (req, res) => {
    res.render("register");
});

router.post("/register", user.registerUser);

router.get("/login", (req, res) => {
    res.render("login");
});


router.post("/login", user.loginUser);

router.get("/dashboard", checkLogin, (req, res) => {
    
    res.render("dashboard");
});

router.get("/user-list", user.listUsers);



module.exports = router;