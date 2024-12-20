{{-- 
|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:
--}}

<style> 
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-400-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-400-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-400-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-400-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-400-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-400-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-400-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-700-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap;
  src: url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-700-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-700-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-700-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-700-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-700-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-700-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}

/* gg sans*/
@font-face { font-family: 'gg sans Bold'; font-style: normal; font-weight: normal;
  font-display: swap; src: url('{{themeAsset('gg sans Bold.woff')}}');
}
@font-face { font-family: 'gg sans Normal Regular'; font-style: normal; font-weight: normal;
  font-display: swap; src: url('{{themeAsset('gg sans Regular.woff')}}');
}
@font-face { font-family: 'gg sans Medium Regular'; font-style: normal; font-weight: normal;
  font-display: swap; src: url('{{themeAsset('gg sans Medium.woff')}}');
}
@font-face { font-family: 'gg sans SemiBold Regular'; font-style: normal; font-weight: normal;
  font-display: swap; src: url('{{themeAsset('gg sans Semibold.woff')}}');
}

html {
    font-size: 100%; }

/* From the :root element you can easily change the colors of the design, its size and so on. */
:root {

  /* You can change the font family in the whole design here. (You need to add the font family to the codes.) */
  --font-family: 'gg sans Medium Regular';

  /* You can change the font size here, is proportional to all texts. */
  --font-size: 16px;

  /* You can change the background color by typing the color code. (If you do not enter a background-image image, the background-color will be active.) */
  --background-color: #000;
  --background-image: url({{themeAsset('../../wallpaper.png')}});

  /* You can change the frame thickness and color of the picture by typing the number of pixels and the color code. */
  --image-border-color: #1f232e;
  --image-border-px: 3px;

  /* You can change the width and size of the picture by typing the number of pixels. */
  --image-width: 140px;
  --image-height: 140px;

  /* You can change the colors of the title and description section by typing the color codes. */
  --title-color: #fff;
  --description-color: #fff;

  /* You can change the colors of social media icons by changing the color code. */
  --svg-color: #fff;

  /* You can change the background, text color and active color of the menu by changing the color codes. */
  --menu-background-color: #1f232e;
  --menu-text-color: #fff;
  --menu-active-text-color: #8ecae6;

  /* You can change the button's background, text color and active color by changing the color codes. */
  --button-background-color: #1f232e;
  --button-text-color: #fff;
  --button-text-hover-color: #8ecae6;

  /* You can change the background, text color and active color of the text field by changing the color codes. */
  --textarea-background-color: #1f232e;
  --textarea-text-color: #fff;
  --textarea-link-text-color: #8ecae6;

  /* You can change the background, text color and active color of the footer area by changing the color codes. */
  --footer-background-color: #1f232e;
  --footer-text-color: #fff;
  --footer-link-text-color: #8ecae6;
}
</style>