import axios from 'axios';
const baseDomain = 'http://devblog.com';
const apiVersion = 'v1';
const baseURL = `${baseDomain}/api/${apiVersion}`;

export default axios.create({
    baseURL
    // can put token later
})