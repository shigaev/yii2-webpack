export class Header {
    constructor(domElemet, color = '') {
        this.domElemet = domElemet;
        this.color = color;
    }

    setColor(color) {
        const selectHeader = document.querySelector(this.domElemet);

        if (selectHeader) {
            selectHeader.style.backgroundColor = color;
        }
    }
}