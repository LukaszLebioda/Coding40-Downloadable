
const nodemailer = require('nodemailer');
const mailGun = require('nodemailer-mailgun-transport');

const auth = {
    auth: {
        api_key: process.env.API_KEY ||  'key-667b05c72ccbaf0a28bf71698bcbf11d', // TODO: Replace with your mailgun API KEY
        domain: process.env.DOMAIN || 'sandboxfe071836c7ac46de84cac4ac92c01d7c.mailgun.org' // TODO: Replace with your mailgun DOMAIN
    }
};

const transporter = nodemailer.createTransport(mailGun(auth));


const sendMail = (email, subject, text, cb) => {
    const mailOptions = {
        from: email, // TODO replace this with your own email
        to: 'lukasz.leb@gmail.com', // TODO: the receiver email has to be authorized for the free tier
        subject,
        text
    };

    transporter.sendMail(mailOptions, function (err, data) {
        if (err) {
            return cb(err, null);
        }
        return cb(null, data);
    });
}

module.exports = sendMail;
