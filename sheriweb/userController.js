const sql = require('../db');

exports.saveUser = async (req, res) => {
    const { name, email, phone, interest, message } = req.body;

    try {
        await sql.query`
            INSERT INTO Users (full_name, email, phone, interest_type, message)
            VALUES (${name}, ${email}, ${phone}, ${interest}, ${message})
        `;
        res.json({ message: "User Saved Successfully" });
    } catch (err) {
        res.status(500).send(err);
    }
};
