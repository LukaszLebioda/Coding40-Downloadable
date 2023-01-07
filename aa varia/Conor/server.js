const express = require("express");
const app = express();

const nodemailer = require("nodemailer");

const PORT = process.env.POR || 5000;

// Middleware
app.use(express.static("public"));
app.use(express.json());

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/public/contactform.html");
})

app.post("/", (req, res) => {
    console.log(req.body);

    // const transporter = nodemailer.createTransport({
    //     service: "gmail",
    //     auth: {
    //         user: "lukasz.leb@gmail.com",
    //         pass: "carlossainz82"
    //     }
    // });
    const transporter = nodemailer.createTransport({
        host: "poczta22656.domeny.host",
        port: 587,
        auth: {
            user: "lukasz@coding40.eu",
            pass: "DomenyKankk40!!"
        }
    });

    const mailOptions = {
        from: req.body.email,
        to: "lukasz@coding40.eu",
        subject: `Message from ${req.body.email}: ${req.body.subject}`,
        text: req.body.message
    }

    transporter.sendMail(mailOptions, (error, info) => {
        if(error) {
            console.log(error);
            res.send("error");
        } else {
            console.log("Email sent: " + info.response);
            res.send("Success");
        }
    })

});

app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
})