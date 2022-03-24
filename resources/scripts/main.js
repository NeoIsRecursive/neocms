import { Parser, HtmlRenderer } from "commonmark";
import emojify from "./emojify";

const parser = new Parser();
const renderer = new HtmlRenderer();

document.getElementById("input").addEventListener("keyup", (input) => {
    let parsed = parser.parse(emojify(input.target.value));
    document.getElementById("preview").innerHTML = renderer.render(parsed);
});
