const mongoose = require("mongoose");

const userSchema = mongoose.Schema({
    full_name: "String",
    email: "String",
    password: "String",
});

const userModel = mongoose.model("users", userSchema);

module.exports = userModel;