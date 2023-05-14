import './scss/main';
import {Header} from "./js/components/header";
import {Footer} from "./js/components/footer";

let header = new Header('header');
let footer = new Footer('footer');

header.setColor('tomato');
footer.setColor('#2f2f2f');