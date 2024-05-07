//Final JavaScript
const generateQuote = function () {
    const quotes = [
        {
            quote: " “The development of full artificial intelligence could spell the end of the human race….It would take off on its own, and re-design itself at an ever increasing rate. Humans, who are limited by slow biological evolution, couldn’t compete, and would be superseded.” ",
            author: "— Stephen Hawking",
        },
        {
            quote: "“I visualise a time when we will be to robots what dogs are to humans, and I’m rooting for the machines.”",
            author: "—Claude Shannon",
        },
        {
            quote: "“Artificial intelligence would be the ultimate version of Google. The ultimate search engine that would understand everything on the web. It would understand exactly what you wanted, and it would give you the right thing. We’re nowhere near doing that now. However, we can get incrementally closer to that, and that is basically what we work on.”",
            author: "—Larry Page",
        },
        {
            quote: "“The pace of progress in artificial intelligence (I’m not referring to narrow AI) is incredibly fast. Unless you have direct exposure to groups like Deepmind, you have no idea how fast—it is growing at a pace close to exponential. The risk of something seriously dangerous happening is in the five-year time frame. 10 years at most.”",
            author: "—Elon Musk",
        },
        {
            quote: "“The upheavals [of artificial intelligence] can escalate quickly and become scarier and even cataclysmic. Imagine how a medical robot, originally programmed to rid cancer, could conclude that the best way to obliterate cancer is to exterminate humans who are genetically prone to the disease.”",
            author: "— Nick Bilton",
        },
        {
            quote: "“I don’t want to really scare you, but it was alarming how many people I talked to who are highly placed people in AI who have retreats that are sort of ‘bug out’ houses, to which they could flee if it all hits the fan.”",
            author: "—James Barrat,",
        },
        {
            quote: "Have a biscuit, Potter.",
            author: "Minerva McGonagall",
        },
        {
            quote: "Happiness can be found even in the darkest of times, if one only remembers to turn on the light.",
            author: "Albus Dumbledore",
        },
        {
            quote: "Socks are Dobby’s favorite, favorite clothes, sir!",
            author: "Dobby",
        },
    ];

    let arrayIndex = Math.floor(Math.random() * quotes.length);
    document.getElementById("quotes").innerHTML = quotes[arrayIndex].quote;
    document.getElementById("author").innerHTML = quotes[arrayIndex].author;
};
window.onload = function () {
    generateQuote();
};
