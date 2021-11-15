const express = require('express');
const authController = require('../controllers/auth');

const router = express.Router();

router.post('/profile', authController.changePassword);


module.exports = router;