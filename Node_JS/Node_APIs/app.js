const express = require("express");
const cors = require("cors");

const app = express();
// default port
const PORT = 4000;

// cros origin policy
app.use(cors());

// form submission settings
app.use(express.json());
app.use(express.urlencoded({extended: true}));

// handling user
app.use("/api", require("./routes/api"));

app.listen(PORT, () => {
    console.log(`Listening at: ${PORT}`);
});