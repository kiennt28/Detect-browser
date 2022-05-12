/* eslint-disable no-unused-expressions */

(() => {
  const putResult = (result, selector) => {
    const element = document.getElementById(selector);

    if (!element) {
      return;
    }

    if ('innerHTML' in element) {
      element.innerHTML = result;
    }
  };

  const simpleHash = (h) => {
    return CryptoJS.SHA1(h).toString().slice(0, 16);
  };

  const jsWgl = () => {
    const canvas = document.createElement('canvas');
    canvas.width = 300;
    canvas.height = 300;

    const gl = canvas.getContext('webgl') || canvas.getContext('experimental-webgl');

    if (gl) {
      const vShaderTemplate = 'attribute vec2 attrVertex;varying vec2 varyinTexCoordinate;uniform vec2 uniformOffset;'
        + 'void main(){varyinTexCoordinate=attrVertex+uniformOffset;gl_Position=vec4(attrVertex,0,1);}';
      const fShaderTemplate = 'precision mediump float;varying vec2 varyinTexCoordinate;void main() {gl_FragColor=vec4(varyinTexCoordinate,0,1);}';
      const vertexPosBuffer = gl.createBuffer();
      gl.bindBuffer(gl.ARRAY_BUFFER, vertexPosBuffer);
      const vertices = new Float32Array([-0.2, -0.9, 0, 0.4, -0.26, 0, 0, 0.732134444, 0]);
      gl.bufferData(gl.ARRAY_BUFFER, vertices, gl.STATIC_DRAW);
      vertexPosBuffer.itemSize = 3;
      vertexPosBuffer.numItems = 3;
      const program = gl.createProgram();
      const vshader = gl.createShader(gl.VERTEX_SHADER);
      gl.shaderSource(vshader, vShaderTemplate);
      gl.compileShader(vshader);
      const fshader = gl.createShader(gl.FRAGMENT_SHADER);
      gl.shaderSource(fshader, fShaderTemplate);
      gl.compileShader(fshader);
      gl.attachShader(program, vshader);
      gl.attachShader(program, fshader);
      gl.linkProgram(program);
      gl.useProgram(program);

      program.vertexPosAttrib = gl.getAttribLocation(program, 'attrVertex');
      program.offsetUniform = gl.getUniformLocation(program, 'uniformOffset');

      gl.enableVertexAttribArray(program.vertexPosArray);
      gl.vertexAttribPointer(program.vertexPosAttrib, vertexPosBuffer.itemSize, gl.FLOAT, !1, 0, 0);
      gl.uniform2f(program.offsetUniform, 1, 1);
      gl.drawArrays(gl.TRIANGLE_STRIP, 0, vertexPosBuffer.numItems);

      try {
        putResult(simpleHash(gl.canvas.toDataURL()), 'q-js-wgl');
      } catch (e) {} // eslint-disable-line
    }
  };

  const jsCanvas = () => {
    const canvas = document.createElement('canvas');
    canvas.width = 280;
    canvas.height = 60;

    if (typeof canvas.getContext === 'function') {
      const ctx = canvas.getContext('2d');
      ctx.fillStyle = 'rgb(102, 204, 0)';
      ctx.fillRect(100, 5, 80, 50);
      ctx.fillStyle = '#f60';
      ctx.font = '16pt Arial';
      ctx.fillText('<@nv45. F1n63r,Pr1n71n6!', 10, 40);
      ctx.strokeStyle = 'rgb(120, 186, 176)';
      ctx.arc(80, 10, 20, 0, Math.PI, !1);
      ctx.stroke();

      const canvasDataUrl = canvas.toDataURL();

      let canvasNumHash = 0;
      for (let i = 0; i < canvasDataUrl.length; i++) {
        canvasNumHash = (canvasNumHash << 5) - canvasNumHash + canvasDataUrl.charCodeAt(i); // eslint-disable-line no-bitwise
        canvasNumHash &= canvasNumHash; // eslint-disable-line no-bitwise
      }
      canvasNumHash = canvasNumHash.toString();

      putResult(canvasNumHash, 'q-js-canvas');
    }
  };

  const jsAudio = () => {
    try {
      let audioHashInfo;
      let audioSumInfo = 0; // eslint-disable-line

      const context = new (window.OfflineAudioContext || window.webkitOfflineAudioContext)(1, 44100, 44100);

      // Create oscillator
      const pxiOscillator = context.createOscillator();
      pxiOscillator.type = 'triangle';
      pxiOscillator.frequency.value = 1e4;

      // Create and configure compressor
      const pxiCompressor = context.createDynamicsCompressor();
      pxiCompressor.threshold && (pxiCompressor.threshold.value = -50);
      pxiCompressor.knee && (pxiCompressor.knee.value = 40);
      pxiCompressor.ratio && (pxiCompressor.ratio.value = 12);
      pxiCompressor.reduction && (pxiCompressor.reduction.value = -20);
      pxiCompressor.attack && (pxiCompressor.attack.value = 0);
      pxiCompressor.release && (pxiCompressor.release.value = 0.25);

      // Connect nodes
      pxiOscillator.connect(pxiCompressor);
      pxiCompressor.connect(context.destination);

      // Start audio processing
      pxiOscillator.start(0);
      context.startRendering();
      context.oncomplete = (evnt) => {
        const sha1 = CryptoJS.algo.SHA1.create();
        for (let i = 0; i < evnt.renderedBuffer.length; i++) {
          sha1.update(evnt.renderedBuffer.getChannelData(0)[i].toString());
        }
        const hash = sha1.finalize();
        audioHashInfo = hash.toString(CryptoJS.enc.Hex);

        for (let i = 4500; i < 5e3; i++) {
          audioSumInfo += Math.abs(evnt.renderedBuffer.getChannelData(0)[i]);
        }
        pxiCompressor.disconnect();

        putResult(audioHashInfo.slice(0, 16), 'q-js-audio');
      };
    } catch (e) {} // eslint-disable-line
  };

  const jsRects = () => {
    const elem = document.createElement('div');
    const s = elem.style;

    s.position = 'absolute';
    s.left = '3.1px';
    s.top = '2.1px';
    s.zIndex = '100';
    s.visibility = 'hidden';
    s.fontSize = '19.123px';
    s.transformOrigin = '0.1px 0.2px 0.3px';
    s.webkitTransformOrigin = '0.1px 0.2px 0.3px';
    s.webkitTransform = 'scale(1.01123) matrix3d(0.251106, 0.0131141, 0, -0.000109893, '
      + '-0.0380797, 0.349552, 0, 7.97469e-06, 0, 0, 1, 0, 575, 88, 0, 1)';
    s.transform = 'scale(1.01123) matrix3d(0.251106, 0.0131141, 0, -0.000109893, -0.0380797, 0.349552, '
      + '0, 7.97469e-06, 0, 0, 1, 0, 575, 88, 0, 1)';

    elem.innerHTML = '<h1>Sed ut perspiciatis unde</h1>pousdfnmv<b>asd<i id="target">asd</i></b>';
    document.body.appendChild(elem);

    let uuid = '';
    const [rect] = document.getElementById('target').getClientRects() || [];

    Object.keys(rect).forEach((el) => {
      uuid += el;
    });

    if (elem.remove) {
      elem.remove();
    }

    putResult(simpleHash(uuid), 'q-js-rects');
  };

  const jsFonts = () => {
    // a font will be compared against all the three default fonts.
    // and if it doesn't match all 3 then that font is not available.
    const baseFonts = ['monospace', 'sans-serif', 'serif'];

    let fontList = [
      'Andale Mono', 'Arial', 'Arial Black', 'Arial Hebrew', 'Arial MT', 'Arial Narrow', 'Arial Rounded MT Bold', 'Arial Unicode MS',
      'Bitstream Vera Sans Mono', 'Book Antiqua', 'Bookman Old Style', 'Calibri', 'Cambria', 'Cambria Math', 'Century', 'Century Gothic',
      'Century Schoolbook', 'Comic Sans', 'Comic Sans MS', 'Consolas', 'Courier', 'Courier New', 'Garamond', 'Geneva', 'Georgia',
      'Impact', 'Lucida Bright', 'Lucida Calligraphy', 'Lucida Console', 'Lucida Fax', 'LUCIDA GRANDE', 'Lucida Handwriting', 'Lucida Sans',
      'Lucida Sans Typewriter', 'Lucida Sans Unicode', 'Microsoft Sans Serif', 'Monaco', 'Monotype Corsiva', 'MS Gothic', 'MS Outlook',
      'MS PGothic', 'MS Reference Sans Serif', 'MS Sans Serif', 'MS Serif', 'MYRIAD', 'MYRIAD PRO', 'Palatino', 'Palatino Linotype', 'Segoe Print',
      'Segoe Script', 'Segoe UI', 'Segoe UI Light', 'Segoe UI Semibold', 'Segoe UI Symbol', 'Tahoma', 'Times', 'Times New Roman',
      'Times New Roman PS', 'Trebuchet MS', 'Verdana', 'Wingdings', 'Wingdings 2', 'Wingdings 3', 'Helvetica', 'Helvetica Neue',
    ];
    const extendedFontList = [
      'Abadi MT Condensed Light', 'Academy Engraved LET', 'ADOBE CASLON PRO', 'Adobe Garamond', 'ADOBE GARAMOND PRO',
      'Agency FB', 'Aharoni', 'Albertus Extra Bold', 'Albertus Medium', 'Algerian', 'Amazone BT', 'American Typewriter',
      'American Typewriter Condensed', 'AmerType Md BT', 'Andalus', 'Angsana New', 'AngsanaUPC', 'Antique Olive',
      'Aparajita', 'Apple Chancery', 'Apple Color Emoji', 'Apple SD Gothic Neo', 'Arabic Typesetting', 'ARCHER', 'ARNO PRO',
      'Arrus BT', 'Aurora Cn BT', 'AvantGarde Bk BT', 'AvantGarde Md BT', 'AVENIR', 'Ayuthaya', 'Bandy',
      'Bangla Sangam MN', 'Bank Gothic', 'BankGothic Md BT', 'Baskerville', 'Baskerville Old Face', 'Batang', 'BatangChe',
      'Bauer Bodoni', 'Bauhaus 93', 'Bazooka', 'Bell MT', 'Bembo', 'Benguiat Bk BT', 'Berlin Sans FB', 'Berlin Sans FB Demi',
      'Bernard MT Condensed', 'BernhardFashion BT', 'BernhardMod BT', 'Big Caslon', 'BinnerD', 'Blackadder ITC', 'BlairMdITC TT',
      'Bodoni 72', 'Bodoni 72 Oldstyle', 'Bodoni 72 Smallcaps', 'Bodoni MT', 'Bodoni MT Black', 'Bodoni MT Condensed',
      'Bodoni MT Poster Compressed', 'Bookshelf Symbol 7', 'Boulder', 'Bradley Hand', 'Bradley Hand ITC', 'Bremen Bd BT',
      'Britannic Bold', 'Broadway', 'Browallia New', 'BrowalliaUPC', 'Brush Script MT', 'Californian FB', 'Calisto MT',
      'Calligrapher', 'Candara', 'CaslonOpnface BT', 'Castellar', 'Centaur', 'Cezanne', 'CG Omega', 'CG Times', 'Chalkboard',
      'Chalkboard SE', 'Chalkduster', 'Charlesworth', 'Charter Bd BT', 'Charter BT', 'Chaucer', 'ChelthmITC Bk BT', 'Chiller',
      'Clarendon', 'Clarendon Condensed', 'CloisterBlack BT', 'Cochin', 'Colonna MT', 'Constantia', 'Cooper Black', 'Copperplate',
      'Copperplate Gothic', 'Copperplate Gothic Bold', 'Copperplate Gothic Light', 'CopperplGoth Bd BT', 'Corbel', 'Cordia New',
      'CordiaUPC', 'Cornerstone', 'Coronet', 'Cuckoo', 'Curlz MT', 'DaunPenh', 'Dauphin', 'David', 'DB LCD Temp', 'DELICIOUS',
      'Denmark', 'DFKai-SB', 'Didot', 'DilleniaUPC', 'DIN', 'DokChampa', 'Dotum', 'DotumChe', 'Ebrima', 'Edwardian Script ITC',
      'Elephant', 'English 111 Vivace BT', 'Engravers MT', 'EngraversGothic BT', 'Eras Bold ITC', 'Eras Demi ITC', 'Eras Light ITC',
      'Eras Medium ITC', 'EucrosiaUPC', 'Euphemia', 'Euphemia UCAS', 'EUROSTILE', 'Exotc350 Bd BT', 'FangSong', 'Felix Titling',
      'Fixedsys', 'FONTIN', 'Footlight MT Light', 'Forte', 'FrankRuehl', 'Fransiscan', 'Freefrm721 Blk BT', 'FreesiaUPC',
      'Freestyle Script', 'French Script MT', 'FrnkGothITC Bk BT', 'Fruitger', 'FRUTIGER', 'Futura', 'Futura Bk BT', 'Futura Lt BT',
      'Futura Md BT', 'Futura ZBlk BT', 'FuturaBlack BT', 'Gabriola', 'Galliard BT', 'Gautami', 'Geeza Pro', 'Geometr231 BT',
      'Geometr231 Hv BT', 'Geometr231 Lt BT', 'GeoSlab 703 Lt BT', 'GeoSlab 703 XBd BT', 'Gigi', 'Gill Sans', 'Gill Sans MT',
      'Gill Sans MT Condensed', 'Gill Sans MT Ext Condensed Bold', 'Gill Sans Ultra Bold', 'Gill Sans Ultra Bold Condensed',
      'Gisha', 'Gloucester MT Extra Condensed', 'GOTHAM', 'GOTHAM BOLD', 'Goudy Old Style', 'Goudy Stout', 'GoudyHandtooled BT',
      'GoudyOLSt BT', 'Gujarati Sangam MN', 'Gulim', 'GulimChe', 'Gungsuh', 'GungsuhChe', 'Gurmukhi MN', 'Haettenschweiler',
      'Harlow Solid Italic', 'Harrington', 'Heather', 'Heiti SC', 'Heiti TC', 'HELV', 'Herald', 'High Tower Text',
      'Hiragino Kaku Gothic ProN', 'Hiragino Mincho ProN', 'Hoefler Text', 'Humanst 521 Cn BT', 'Humanst521 BT', 'Humanst521 Lt BT',
      'Imprint MT Shadow', 'Incised901 Bd BT', 'Incised901 BT', 'Incised901 Lt BT', 'INCONSOLATA', 'Informal Roman', 'Informal011 BT',
      'INTERSTATE', 'IrisUPC', 'Iskoola Pota', 'JasmineUPC', 'Jazz LET', 'Jenson', 'Jester', 'Jokerman', 'Juice ITC', 'Kabel Bk BT',
      'Kabel Ult BT', 'Kailasa', 'KaiTi', 'Kalinga', 'Kannada Sangam MN', 'Kartika', 'Kaufmann Bd BT', 'Kaufmann BT', 'Khmer UI',
      'KodchiangUPC', 'Kokila', 'Korinna BT', 'Kristen ITC', 'Krungthep', 'Kunstler Script', 'Lao UI', 'Latha', 'Leelawadee',
      'Letter Gothic', 'Levenim MT', 'LilyUPC', 'Lithograph', 'Lithograph Light', 'Long Island', 'Lydian BT', 'Magneto',
      'Maiandra GD', 'Malayalam Sangam MN', 'Malgun Gothic', 'Mangal', 'Marigold', 'Marion', 'Marker Felt', 'Market',
      'Marlett', 'Matisse ITC', 'Matura MT Script Capitals', 'Meiryo', 'Meiryo UI', 'Microsoft Himalaya', 'Microsoft JhengHei',
      'Microsoft New Tai Lue', 'Microsoft PhagsPa', 'Microsoft Tai Le', 'Microsoft Uighur', 'Microsoft YaHei',
      'Microsoft Yi Baiti', 'MingLiU', 'MingLiU_HKSCS', 'MingLiU_HKSCS-ExtB', 'MingLiU-ExtB', 'Minion', 'Minion Pro',
      'Miriam', 'Miriam Fixed', 'Mistral', 'Modern', 'Modern No. 20', 'Mona Lisa Solid ITC TT', 'Mongolian Baiti', 'MONO', 'MoolBoran',
      'Mrs Eaves', 'MS LineDraw', 'MS Mincho', 'MS PMincho', 'MS Reference Specialty', 'MS UI Gothic', 'MT Extra', 'MUSEO',
      'MV Boli', 'Nadeem', 'Narkisim', 'NEVIS', 'News Gothic', 'News GothicMT', 'NewsGoth BT', 'Niagara Engraved', 'Niagara Solid',
      'Noteworthy', 'NSimSun', 'Nyala', 'OCR A Extended', 'Old Century', 'Old English Text MT', 'Onyx', 'Onyx BT', 'OPTIMA',
      'Oriya Sangam MN', 'OSAKA', 'OzHandicraft BT', 'Palace Script MT', 'Papyrus', 'Parchment', 'Party LET', 'Pegasus', 'Perpetua',
      'Perpetua Titling MT', 'PetitaBold', 'Pickwick', 'Plantagenet Cherokee', 'Playbill', 'PMingLiU', 'PMingLiU-ExtB',
      'Poor Richard', 'Poster', 'PosterBodoni BT', 'PRINCETOWN LET', 'Pristina', 'PTBarnum BT', 'Pythagoras', 'Raavi',
      'Rage Italic', 'Ravie', 'Ribbon131 Bd BT', 'Rockwell', 'Rockwell Condensed', 'Rockwell Extra Bold', 'Rod', 'Roman',
      'Sakkal Majalla', 'Santa Fe LET', 'Savoye LET', 'Sceptre', 'Script', 'Script MT Bold', 'SCRIPTINA', 'Serifa', 'Serifa BT',
      'Serifa Th BT', 'ShelleyVolante BT', 'Sherwood', 'Shonar Bangla', 'Showcard Gothic', 'Shruti', 'Signboard', 'SILKSCREEN',
      'SimHei', 'Simplified Arabic', 'Simplified Arabic Fixed', 'SimSun', 'SimSun-ExtB', 'Sinhala Sangam MN', 'Sketch Rockwell',
      'Skia', 'Small Fonts', 'Snap ITC', 'Snell Roundhand', 'Socket', 'Souvenir Lt BT', 'Staccato222 BT', 'Steamer', 'Stencil',
      'Storybook', 'Styllo', 'Subway', 'Swis721 BlkEx BT', 'Swiss911 XCm BT', 'Sylfaen', 'Synchro LET', 'System', 'Tamil Sangam MN',
      'Technical', 'Teletype', 'Telugu Sangam MN', 'Tempus Sans ITC', 'Terminal', 'Thonburi', 'Traditional Arabic', 'Trajan',
      'TRAJAN PRO', 'Tristan', 'Tubular', 'Tunga', 'Tw Cen MT', 'Tw Cen MT Condensed', 'Tw Cen MT Condensed Extra Bold', 'TypoUpright BT',
      'Unicorn', 'Univers', 'Univers CE 55 Medium', 'Univers Condensed', 'Utsaah', 'Vagabond', 'Vani', 'Vijaya', 'Viner Hand ITC',
      'VisualUI', 'Vivaldi', 'Vladimir Script', 'Vrinda', 'Westminster', 'WHITNEY', 'Wide Latin', 'ZapfEllipt BT',
      'ZapfHumnst BT', 'ZapfHumnst Dm BT', 'Zapfino', 'Zurich BlkEx BT', 'Zurich Ex BT', 'ZWAdobeF',
    ];

    fontList = fontList.concat(extendedFontList);

    // fontList = fontList.concat(that.options.userDefinedFonts);

    // we use m or w because these two characters take up the maximum width.
    // And we use a LLi so that the same matching fonts can get separated
    const testString = 'mmmmmmmmmmlli';

    // we test using 72px font size, we may use any size. I guess larger the better.
    const testSize = '72px';

    const h = document.getElementsByTagName('body')[0];

    // div to load spans for the base fonts
    const baseFontsDiv = document.createElement('div');

    // div to load spans for the fonts to detect
    const fontsDiv = document.createElement('div');

    const defaultWidth = {};
    const defaultHeight = {};

    // creates a span where the fonts will be loaded
    const createSpan = () => {
      const s = document.createElement('span');
      /*
         * We need this css as in some weird browser this
         * span elements shows up for a microSec which creates a
         * bad user experience
       */
      s.style.position = 'absolute';
      s.style.left = '-9999px';
      s.style.fontSize = testSize;
      s.style.lineHeight = 'normal';
      s.innerHTML = testString;
      return s;
    };
    const createSpanWithFonts = (fontToDetect, baseFont) => {
      const s = createSpan();
      s.style.fontFamily = `'${fontToDetect}',${baseFont}`;
      return s;
    };

    // creates spans for the base fonts and adds them to baseFontsDiv
    const initializeBaseFontsSpans = () => {
      const spans = [];
      for (let index = 0, { length } = baseFonts; index < length; index++) {
        const s = createSpan();
        s.style.fontFamily = baseFonts[index];
        baseFontsDiv.appendChild(s);
        spans.push(s);
      }
      return spans;
    };

    // creates spans for the fonts to detect and adds them to fontsDiv
    const initializeFontsSpans = () => {
      const spans = {};
      for (let i = 0, l = fontList.length; i < l; i++) {
        const fontSpans = [];
        for (let j = 0, numDefaultFonts = baseFonts.length; j < numDefaultFonts; j++) {
          const s = createSpanWithFonts(fontList[i], baseFonts[j]);
          fontsDiv.appendChild(s);
          fontSpans.push(s);
        }
        spans[fontList[i]] = fontSpans; // Stores {fontName : [spans for that font]}
      }
      return spans;
    };

    // checks if a font is available
    const isFontAvailable = (fontSpans) => {
      let detected = false;
      for (let i = 0; i < baseFonts.length; i++) {
        detected = (fontSpans[i].offsetWidth !== defaultWidth[baseFonts[i]] || fontSpans[i].offsetHeight !== defaultHeight[baseFonts[i]]);
        if (detected) {
          return detected;
        }
      }
      return detected;
    };

    // create spans for base fonts
    const baseFontsSpans = initializeBaseFontsSpans();

    // add the spans to the DOM
    h.appendChild(baseFontsDiv);

    // get the default width for the three base fonts
    for (let index = 0, { length } = baseFonts; index < length; index++) {
      defaultWidth[baseFonts[index]] = baseFontsSpans[index].offsetWidth; // width for the default font
      defaultHeight[baseFonts[index]] = baseFontsSpans[index].offsetHeight; // height for the default font
    }

    // create spans for fonts to detect
    const fontsSpans = initializeFontsSpans();

    // add all the spans to the DOM
    h.appendChild(fontsDiv);

    // check available fonts
    const fontsArray = [];
    for (let i = 0, l = fontList.length; i < l; i++) {
      if (isFontAvailable(fontsSpans[fontList[i]])) {
        fontsArray.push(fontList[i]);
      }
    }

    h.removeChild(fontsDiv);
    h.removeChild(baseFontsDiv);

    putResult(simpleHash(fontsArray.join('~~~')), 'q-js-fonts');
  };

  jsWgl();
  jsCanvas();
  jsAudio();
  jsFonts();
  jsRects();
})();
