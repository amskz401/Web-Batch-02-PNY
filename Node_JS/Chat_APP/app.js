const express = require("express");
const expressLayouts = require("express-ejs-layouts");
const session = require("express-session");
require("./server/config");
const app = express();

const port = 3000;

// default values
app.use((req, res, next) => {
  app.locals = {
    setUser: "",
  };
  next();
});

// default view engine
app.use(expressLayouts);
app.set("layout", "./layouts/app");
app.set("view engine", "ejs");

// load static files
app.use(express.static("public"));

// get form data
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

// user router
app.use("/", require("./routes/user"));

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
