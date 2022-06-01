/**abstract */
import { URL } from '../config'

class User {
    constructor() {
        let first_name, last_name, email, phone, location, password;
    }
    async login() {
        const data = {
            first_name: this.first_name,
            last_name: this.last_name,
            email: this.email,
            phone: this.phone,
            location: this.location,
            password: this.password
        }
    }
}

const user = new User();
user.username = "Joseph";
user.sayHello();