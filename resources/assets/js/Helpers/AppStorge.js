class AppStorge {
    StoreToken(token) {
        localStorage.setItem('token', token);
    }
    StoreUser(user) {
        localStorage.setItem('userToken', user);
    }

    Store(user, token) {
        this.StoreUser(user)
        this.StoreToken(token)
    }

    clear() {
        localStorage.removeItem('token')
        localStorage.removeItem('user')
    }

    getToken() {
        return localStorage.getItem('token')
    }

    getUser() {
        return localStorage.getItem('user')
    }
}

export default AppStorge = new AppStorge()