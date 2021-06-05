class str extends String {
    replaceEvery(regex, stringToReplace){
        const matches = this.match(regex);
        this.replace(matches, stringToReplace);
    }
}
const helloWorldOfHello = new str('Hello, World ! of Hello').replaceEvery(/Hello/, 'World');
console.log(helloWorldOfHello);