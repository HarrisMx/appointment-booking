var uri = "https://authservice.priaid.ch/login";
var secret_key = "mysecretkey";
var computedHash = CryptoJS.HmacMD5(uri, secret_key);
var computedHashString = computedHash.toString(CryptoJS.enc.Base64);     