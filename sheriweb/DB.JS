const sql = require('mssql');

const config = {
    server: 'DESKTOP-9SEL91I', // Screenshot se match kiya gaya hai
    database: 'SAD_System', 
    options: {
        encrypt: true, // Image mein 'Mandatory' select hai, isliye ise true rakhen
        trustServerCertificate: true, // Screenshot mein check box ticked hai
        trustedConnection: true // Yeh Windows Authentication ke liye zaroori hai
    },
    // Agar aap apne local computer se connect kar rahe hain 
    // toh user/password ki zaroorat nahi hoti (Windows Auth mein)
    driver: 'msnodesqlv8' 
};

// Connection logic
const connectDB = async () => {
    try {
        await sql.connect(config);
        console.log("✅ SQL Server Connected (Windows Auth)");
    } catch (err) {
        console.error("❌ DB Connection Error:", err.message);
    }
};

connectDB();

module.exports = sql;