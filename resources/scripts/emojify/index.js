import { emojis } from "./emojis.json";

const isShortname = (tryEmoji) => {
    return emojis.some((e) => e.shortname === tryEmoji);
};

const shortNameToEmoji = (emoji) => {
    const emojicode = emojis.find((e) => e.shortname === emoji && e.emoji);
    return emojicode ?? emoji;
};

console.log(shortNameToEmoji(":"));

export default (text) =>
    text.replaceAll(/(?!::):(?! ).(([^ :])*.*?):?/g, (x) =>
        isShortname(x) ? shortNameToEmoji(x).emoji : x
    );
