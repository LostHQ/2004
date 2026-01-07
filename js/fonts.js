const charSize = 20;

let drawB12;
let drawP11;
let drawP12;
let sheetB12;
let sheetP11;
let sheetP12;

const charMap = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"£$%^&*()-_=+[{]};:\'@#~,<.>/?\\|';
const boundsB12 = {"0":{"x":0,"y":2,"width":8,"height":10},"1":{"x":0,"y":2,"width":7,"height":10},"2":{"x":0,"y":2,"width":8,"height":10},"3":{"x":0,"y":2,"width":7,"height":10},"4":{"x":0,"y":2,"width":8,"height":10},"5":{"x":0,"y":2,"width":7,"height":10},"6":{"x":0,"y":2,"width":8,"height":10},"7":{"x":1,"y":2,"width":7,"height":10},"8":{"x":0,"y":2,"width":8,"height":10},"9":{"x":0,"y":2,"width":8,"height":10},"A":{"x":0,"y":2,"width":8,"height":10},"B":{"x":0,"y":2,"width":7,"height":10},"C":{"x":0,"y":2,"width":7,"height":10},"D":{"x":0,"y":2,"width":7,"height":10},"E":{"x":0,"y":2,"width":7,"height":10},"F":{"x":0,"y":2,"width":7,"height":10},"G":{"x":0,"y":2,"width":8,"height":10},"H":{"x":0,"y":2,"width":7,"height":10},"I":{"x":0,"y":2,"width":3,"height":10},"J":{"x":0,"y":2,"width":8,"height":10},"K":{"x":0,"y":2,"width":8,"height":10},"L":{"x":0,"y":2,"width":7,"height":10},"M":{"x":0,"y":2,"width":9,"height":10},"N":{"x":0,"y":2,"width":8,"height":10},"O":{"x":0,"y":2,"width":8,"height":10},"P":{"x":0,"y":2,"width":7,"height":10},"Q":{"x":0,"y":2,"width":8,"height":10},"R":{"x":0,"y":2,"width":7,"height":10},"S":{"x":0,"y":2,"width":7,"height":10},"T":{"x":0,"y":2,"width":7,"height":10},"U":{"x":0,"y":2,"width":8,"height":10},"V":{"x":0,"y":2,"width":7,"height":10},"W":{"x":0,"y":2,"width":9,"height":10},"X":{"x":0,"y":2,"width":7,"height":10},"Y":{"x":0,"y":2,"width":7,"height":10},"Z":{"x":0,"y":2,"width":7,"height":10},"a":{"x":0,"y":6,"width":7,"height":6},"b":{"x":0,"y":2,"width":7,"height":10},"c":{"x":0,"y":6,"width":6,"height":6},"d":{"x":0,"y":2,"width":7,"height":10},"e":{"x":0,"y":6,"width":7,"height":6},"f":{"x":0,"y":4,"width":7,"height":11},"g":{"x":0,"y":6,"width":7,"height":10},"h":{"x":0,"y":2,"width":7,"height":10},"i":{"x":0,"y":5,"width":3,"height":7},"j":{"x":0,"y":5,"width":6,"height":11},"k":{"x":0,"y":2,"width":7,"height":10},"l":{"x":0,"y":2,"width":3,"height":10},"m":{"x":0,"y":6,"width":9,"height":6},"n":{"x":0,"y":6,"width":7,"height":6},"o":{"x":0,"y":6,"width":7,"height":6},"p":{"x":0,"y":6,"width":7,"height":10},"q":{"x":0,"y":6,"width":7,"height":10},"r":{"x":0,"y":6,"width":5,"height":6},"s":{"x":0,"y":6,"width":7,"height":6},"t":{"x":0,"y":3,"width":5,"height":9},"u":{"x":0,"y":6,"width":7,"height":6},"v":{"x":0,"y":6,"width":7,"height":6},"w":{"x":0,"y":6,"width":8,"height":6},"x":{"x":0,"y":6,"width":7,"height":6},"y":{"x":0,"y":6,"width":7,"height":10},"z":{"x":0,"y":6,"width":7,"height":6},"!":{"x":0,"y":2,"width":3,"height":10},"\"":{"x":0,"y":0,"width":6,"height":4},"£":{"x":0,"y":1,"width":10,"height":11},"$":{"x":0,"y":2,"width":8,"height":10},"%":{"x":0,"y":2,"width":11,"height":10},"^":{"x":0,"y":2,"width":8,"height":5},"&":{"x":0,"y":2,"width":12,"height":10},"*":{"x":0,"y":2,"width":9,"height":6},"(":{"x":0,"y":2,"width":5,"height":11},")":{"x":0,"y":2,"width":5,"height":11},"-":{"x":0,"y":7,"width":6,"height":1},"_":{"x":0,"y":11,"width":9,"height":1},"=":{"x":0,"y":6,"width":8,"height":4},"+":{"x":0,"y":4,"width":9,"height":7},"[":{"x":0,"y":2,"width":6,"height":11},"{":{"x":0,"y":2,"width":7,"height":11},"]":{"x":0,"y":2,"width":6,"height":11},"}":{"x":0,"y":2,"width":7,"height":11},";":{"x":0,"y":5,"width":5,"height":7},":":{"x":0,"y":6,"width":3,"height":6},"'":{"x":0,"y":0,"width":3,"height":4},"@":{"x":0,"y":2,"width":13,"height":10},"#":{"x":0,"y":2,"width":13,"height":10},"~":{"x":0,"y":5,"width":11,"height":3},",":{"x":0,"y":8,"width":3,"height":4},"<":{"x":0,"y":3,"width":8,"height":7},".":{"x":0,"y":11,"width":3,"height":1},">":{"x":0,"y":3,"width":8,"height":7},"/":{"x":0,"y":0,"width":6,"height":12},"?":{"x":0,"y":0,"width":9,"height":12},"\\":{"x":0,"y":0,"width":6,"height":12},"|":{"x":0,"y":0,"width":3,"height":12}};
const boundsP11 = {"0":{"x":0,"y":1,"width":6,"height":8},"1":{"x":0,"y":1,"width":4,"height":8},"2":{"x":0,"y":1,"width":6,"height":8},"3":{"x":0,"y":1,"width":5,"height":8},"4":{"x":0,"y":1,"width":5,"height":8},"5":{"x":0,"y":1,"width":5,"height":8},"6":{"x":0,"y":1,"width":6,"height":8},"7":{"x":1,"y":1,"width":5,"height":8},"8":{"x":0,"y":1,"width":6,"height":8},"9":{"x":0,"y":1,"width":6,"height":8},"A":{"x":0,"y":1,"width":6,"height":8},"B":{"x":0,"y":1,"width":6,"height":8},"C":{"x":0,"y":1,"width":6,"height":8},"D":{"x":0,"y":1,"width":6,"height":8},"E":{"x":0,"y":1,"width":5,"height":8},"F":{"x":0,"y":1,"width":5,"height":8},"G":{"x":0,"y":1,"width":6,"height":8},"H":{"x":0,"y":1,"width":6,"height":8},"I":{"x":0,"y":1,"width":2,"height":8},"J":{"x":0,"y":1,"width":6,"height":8},"K":{"x":0,"y":1,"width":6,"height":8},"L":{"x":0,"y":1,"width":5,"height":8},"M":{"x":0,"y":1,"width":7,"height":8},"N":{"x":0,"y":1,"width":6,"height":8},"O":{"x":0,"y":1,"width":6,"height":8},"P":{"x":0,"y":1,"width":6,"height":8},"Q":{"x":0,"y":1,"width":6,"height":8},"R":{"x":0,"y":1,"width":6,"height":8},"S":{"x":0,"y":1,"width":6,"height":8},"T":{"x":0,"y":1,"width":6,"height":8},"U":{"x":0,"y":1,"width":6,"height":8},"V":{"x":0,"y":1,"width":6,"height":8},"W":{"x":0,"y":1,"width":8,"height":8},"X":{"x":0,"y":1,"width":6,"height":8},"Y":{"x":0,"y":1,"width":6,"height":8},"Z":{"x":0,"y":1,"width":6,"height":8},"a":{"x":0,"y":4,"width":5,"height":5},"b":{"x":0,"y":1,"width":5,"height":8},"c":{"x":0,"y":4,"width":4,"height":5},"d":{"x":0,"y":0,"width":5,"height":9},"e":{"x":0,"y":4,"width":5,"height":5},"f":{"x":0,"y":3,"width":5,"height":9},"g":{"x":0,"y":4,"width":5,"height":8},"h":{"x":0,"y":1,"width":5,"height":8},"i":{"x":0,"y":3,"width":2,"height":6},"j":{"x":0,"y":3,"width":4,"height":9},"k":{"x":0,"y":1,"width":5,"height":8},"l":{"x":0,"y":1,"width":2,"height":8},"m":{"x":0,"y":4,"width":6,"height":5},"n":{"x":0,"y":4,"width":5,"height":5},"o":{"x":0,"y":4,"width":5,"height":5},"p":{"x":0,"y":4,"width":5,"height":8},"q":{"x":0,"y":4,"width":5,"height":8},"r":{"x":0,"y":4,"width":4,"height":5},"s":{"x":0,"y":4,"width":5,"height":5},"t":{"x":0,"y":2,"width":3,"height":7},"u":{"x":0,"y":4,"width":5,"height":5},"v":{"x":0,"y":4,"width":6,"height":5},"w":{"x":0,"y":4,"width":6,"height":5},"x":{"x":0,"y":4,"width":6,"height":5},"y":{"x":0,"y":4,"width":5,"height":8},"z":{"x":0,"y":4,"width":5,"height":5},"!":{"x":0,"y":1,"width":2,"height":8},"\"":{"x":0,"y":2,"width":4,"height":3},"£":{"x":0,"y":1,"width":6,"height":8},"$":{"x":0,"y":1,"width":6,"height":8},"%":{"x":0,"y":2,"width":10,"height":7},"^":{"x":0,"y":1,"width":6,"height":4},"&":{"x":0,"y":1,"width":8,"height":8},"*":{"x":1,"y":1,"width":6,"height":4},"(":{"x":0,"y":1,"width":3,"height":9},")":{"x":0,"y":1,"width":3,"height":9},"-":{"x":0,"y":5,"width":4,"height":1},"_":{"x":0,"y":8,"width":6,"height":1},"=":{"x":0,"y":4,"width":5,"height":3},"+":{"x":1,"y":3,"width":6,"height":5},"[":{"x":0,"y":1,"width":4,"height":9},"{":{"x":0,"y":1,"width":4,"height":9},"]":{"x":0,"y":1,"width":4,"height":9},"}":{"x":0,"y":1,"width":4,"height":9},";":{"x":0,"y":5,"width":3,"height":5},":":{"x":0,"y":5,"width":2,"height":4},"'":{"x":0,"y":2,"width":2,"height":2},"@":{"x":0,"y":1,"width":9,"height":8},"#":{"x":0,"y":1,"width":8,"height":8},"~":{"x":0,"y":4,"width":7,"height":2},",":{"x":0,"y":6,"width":2,"height":3},"<":{"x":0,"y":2,"width":5,"height":5},".":{"x":0,"y":8,"width":2,"height":1},">":{"x":0,"y":2,"width":5,"height":5},"/":{"x":0,"y":1,"width":4,"height":8},"?":{"x":0,"y":1,"width":6,"height":8},"\\":{"x":0,"y":1,"width":4,"height":8},"|":{"x":0,"y":1,"width":2,"height":9}};
const boundsP12 = {"0":{"x":0,"y":2,"width":7,"height":10},"1":{"x":0,"y":2,"width":6,"height":10},"2":{"x":0,"y":2,"width":7,"height":10},"3":{"x":0,"y":2,"width":6,"height":10},"4":{"x":0,"y":2,"width":7,"height":10},"5":{"x":0,"y":2,"width":6,"height":10},"6":{"x":0,"y":2,"width":7,"height":10},"7":{"x":1,"y":2,"width":6,"height":10},"8":{"x":0,"y":2,"width":7,"height":10},"9":{"x":0,"y":2,"width":7,"height":10},"A":{"x":0,"y":2,"width":7,"height":10},"B":{"x":0,"y":2,"width":6,"height":10},"C":{"x":0,"y":2,"width":6,"height":10},"D":{"x":0,"y":2,"width":6,"height":10},"E":{"x":0,"y":2,"width":6,"height":10},"F":{"x":0,"y":2,"width":6,"height":10},"G":{"x":0,"y":2,"width":7,"height":10},"H":{"x":0,"y":2,"width":6,"height":10},"I":{"x":0,"y":2,"width":2,"height":10},"J":{"x":0,"y":2,"width":7,"height":10},"K":{"x":0,"y":2,"width":7,"height":10},"L":{"x":0,"y":2,"width":6,"height":10},"M":{"x":0,"y":2,"width":8,"height":10},"N":{"x":0,"y":2,"width":7,"height":10},"O":{"x":0,"y":2,"width":7,"height":10},"P":{"x":0,"y":2,"width":6,"height":10},"Q":{"x":0,"y":2,"width":7,"height":10},"R":{"x":0,"y":2,"width":6,"height":10},"S":{"x":0,"y":2,"width":6,"height":10},"T":{"x":0,"y":2,"width":6,"height":10},"U":{"x":0,"y":2,"width":7,"height":10},"V":{"x":0,"y":2,"width":6,"height":10},"W":{"x":0,"y":2,"width":8,"height":10},"X":{"x":0,"y":2,"width":6,"height":10},"Y":{"x":0,"y":2,"width":6,"height":10},"Z":{"x":0,"y":2,"width":6,"height":10},"a":{"x":0,"y":6,"width":6,"height":6},"b":{"x":0,"y":2,"width":6,"height":10},"c":{"x":0,"y":6,"width":5,"height":6},"d":{"x":0,"y":2,"width":6,"height":10},"e":{"x":0,"y":6,"width":6,"height":6},"f":{"x":0,"y":4,"width":6,"height":11},"g":{"x":0,"y":6,"width":6,"height":10},"h":{"x":0,"y":2,"width":6,"height":10},"i":{"x":0,"y":5,"width":2,"height":7},"j":{"x":0,"y":5,"width":5,"height":11},"k":{"x":0,"y":2,"width":6,"height":10},"l":{"x":0,"y":2,"width":2,"height":10},"m":{"x":0,"y":6,"width":8,"height":6},"n":{"x":0,"y":6,"width":6,"height":6},"o":{"x":0,"y":6,"width":6,"height":6},"p":{"x":0,"y":6,"width":6,"height":10},"q":{"x":0,"y":6,"width":6,"height":10},"r":{"x":0,"y":6,"width":4,"height":6},"s":{"x":0,"y":6,"width":6,"height":6},"t":{"x":0,"y":3,"width":4,"height":9},"u":{"x":0,"y":6,"width":6,"height":6},"v":{"x":0,"y":6,"width":6,"height":6},"w":{"x":0,"y":6,"width":6,"height":6},"x":{"x":0,"y":6,"width":6,"height":6},"y":{"x":0,"y":6,"width":6,"height":10},"z":{"x":0,"y":6,"width":6,"height":6},"!":{"x":0,"y":2,"width":2,"height":10},"\"":{"x":0,"y":0,"width":4,"height":4},"£":{"x":0,"y":1,"width":9,"height":11},"$":{"x":0,"y":2,"width":7,"height":10},"%":{"x":0,"y":2,"width":10,"height":10},"^":{"x":0,"y":2,"width":7,"height":5},"&":{"x":0,"y":2,"width":11,"height":10},"*":{"x":0,"y":2,"width":8,"height":6},"(":{"x":0,"y":2,"width":4,"height":11},")":{"x":0,"y":2,"width":4,"height":11},"-":{"x":0,"y":7,"width":5,"height":1},"_":{"x":0,"y":11,"width":8,"height":1},"=":{"x":0,"y":6,"width":7,"height":4},"+":{"x":0,"y":4,"width":8,"height":7},"[":{"x":0,"y":2,"width":5,"height":11},"{":{"x":0,"y":2,"width":6,"height":11},"]":{"x":0,"y":2,"width":5,"height":11},"}":{"x":0,"y":2,"width":6,"height":11},";":{"x":0,"y":5,"width":4,"height":7},":":{"x":0,"y":6,"width":2,"height":6},"'":{"x":0,"y":0,"width":2,"height":4},"@":{"x":0,"y":2,"width":12,"height":10},"#":{"x":0,"y":2,"width":12,"height":10},"~":{"x":0,"y":5,"width":10,"height":3},",":{"x":0,"y":8,"width":2,"height":4},"<":{"x":0,"y":3,"width":7,"height":7},".":{"x":0,"y":11,"width":2,"height":1},">":{"x":0,"y":3,"width":7,"height":7},"/":{"x":0,"y":0,"width":5,"height":12},"?":{"x":0,"y":0,"width":8,"height":12},"\\":{"x":0,"y":0,"width":5,"height":12},"|":{"x":0,"y":0,"width":2,"height":12}};


async function loadFonts() {
    const fontImages = [getImage("/assets/b12.png"), getImage("/assets/p11.png"), getImage("/assets/p12.png")];

    [sheetB12, sheetP11, sheetP12] = await Promise.all(fontImages);

    drawB12 = createBitmapFont(sheetB12, boundsB12);
    drawP11 = createBitmapFont(sheetP11, boundsP11);
    drawP12 = createBitmapFont(sheetP12, boundsP12);
}

async function getImage(url) {
    return new Promise((resolve, reject) => {
        const img = new Image();
        img.onload = () => {
            resolve(img);
        };

        img.onerror = () => {
            reject();
        };

        img.src = url;
    });
}

function createBitmapFont(fontImage, charBounds) {
    const charCols = fontImage.width / charSize;

    const tempCanvas = document.createElement("canvas");
    const tempCtx = tempCanvas.getContext("2d", { willReadFrequently: true });
    tempCtx.imageSmoothingEnabled = false;

    tempCanvas.width = charSize;
    tempCanvas.height = charSize;

    function measureText(text) {
        let totalWidth = 0;

        for (let i = 0; i < text.length; i++) {
            const char = text[i];

            const charIndex = charMap.indexOf(char);
            if (charIndex === -1) {
                totalWidth += 3;
                continue;
            }

            const bounds = charBounds[char];

            totalWidth += bounds.width;

            if (i < text.length - 1) {
                totalWidth += 1;
            }
        }

        return totalWidth;
    }

    function drawBitmapText(ctx, text, x, y, color = "#000000", centered = false, shadow = true) {
        let currentX = x;
        let currentY = y;

        if (centered) {
            const textWidth = measureText(text);
            currentX = x - Math.floor(textWidth / 2);
        }

        if (shadow) {
            drawTextInteral(ctx, text, currentX + 1, currentY + 1, "#000000");
        }

        drawTextInteral(ctx, text, currentX, currentY, color);
    }

    function drawTextInteral(ctx, text, startX, startY, color) {
        let currentX = startX;
        let currentY = startY;

        for (let i = 0; i < text.length; i++) {
            const char = text[i];

            const charIndex = charMap.indexOf(char);
            if (charIndex === -1) {
                currentX += 3;
                continue;
            }

            const col = charIndex % charCols;
            const row = Math.floor(charIndex / charCols);
            const srcX = col * charSize;
            const srcY = row * charSize;

            tempCtx.clearRect(0, 0, charSize, charSize);

            tempCtx.drawImage(fontImage, srcX, srcY, charSize, charSize, 0, 0, charSize, charSize);

            const imageData = tempCtx.getImageData(0, 0, charSize, charSize);
            const { data } = imageData;

            const bounds = charBounds[char];

            const hexColor = color.replace("#", "");
            const r = parseInt(hexColor.length === 3 ? hexColor[0] + hexColor[0] : hexColor.substr(0, 2), 16);
            const g = parseInt(hexColor.length === 3 ? hexColor[1] + hexColor[1] : hexColor.substr(2, 2), 16);
            const b = parseInt(hexColor.length === 3 ? hexColor[2] + hexColor[2] : hexColor.substr(4, 2), 16);

            for (let j = 0; j < data.length; j += 4) {
                const pixelG = data[j + 1];
                const isPink = pixelG < 250;

                if (isPink) {
                    data[j + 3] = 0;
                    continue;
                }

                data[j] = r;
                data[j + 1] = g;
                data[j + 2] = b;
            }

            tempCtx.putImageData(imageData, 0, 0);

            ctx.drawImage(tempCanvas, bounds.x, bounds.y, bounds.width, bounds.height, Math.floor(currentX), Math.floor(currentY + bounds.y), bounds.width, bounds.height);

            currentX += bounds.width + 1;
        }
    }

    return drawBitmapText;
}
