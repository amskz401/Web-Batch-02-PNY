const express = require("express");
const userController = require("../server/controller/userController");

const router = express.Router();

// login middleware
const isLoggedIn = (req, res, next) => {
  if (!req.session?.user) {
    res.redirect("/");
    return;
  }
  next();
};

router.get("/", (req, res) => {
  res.render("index");
});

// login
router.post("/login", userController.loginUser);

router.get("/register", (req, res) => {
  res.render("register");
});

// register
router.post("/register", userController.registerUser);

router.get("/home", isLoggedIn, (req, res) => {
  res.render("home");
});

module.exports = router;
