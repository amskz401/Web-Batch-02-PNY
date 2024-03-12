const userModel = require("../model/userSchema");

const registerUser = (req, res, next) => {
  const user = new userModel(req.body);
  user
    .save()
    .then((r) => {
      console.log(r);
    })
    .catch((err) => {
      console.log(err);
    });
};

const loginUser = (req, res, next) => {};

module.exports = { registerUser, loginUser };
