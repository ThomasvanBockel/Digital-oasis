window.addEventListener("load", init)
let section;


function init() {
    section = document.querySelector("#oase")

    // const test = document.createElement("h1")
    //test.innerText = "Test"
    //section.append(test)

    addBackGround()
    addTree()
    addTree()
    addTree()
    addTree()
    addTree()
    addTree()
}

function addBackGround() {
    const background = document.createElement("img")
    background.src = "images/background.png"
    section.append(background)

}

function randomLocation(tree) {

    console.log("test")
    x = Math.random() * 800 + 1
    console.log(x)
    y = Math.random() * 500 + 1
    console.log(y)
    tree.style.left = x + "px";
    tree.style.top = y + "px";

}

function addTree() {
    const tree = document.createElement("img")
    tree.src = "images/tree.webp"
    section.append(tree)
    tree.id = "myImage"
    randomLocation(tree)
}