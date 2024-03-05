const express = require("express");
const expressLayouts = require("express-ejs-layouts");
require("./server/config");

const app = express();
const PORT = 3000;

// default engine
app.set("view engine", "ejs");
app.use(expressLayouts);
app.set('layout', './layouts/app');

// load static files
app.use(express.static("public"));

// form submit
app.use(express.urlencoded({extended: true}));
app.use(express.json());

// local variables
app.use( (req, res, next) => {
    app.locals = {
        msg: ""
    }
    next();
} )

app.get("/", (req, res) => {
    res.render("index");
});

// user routes
app.use("/", require('./routes/user'));

app.listen(PORT, () => {
    console.log(`Listening at Port: ${PORT}`);
});

