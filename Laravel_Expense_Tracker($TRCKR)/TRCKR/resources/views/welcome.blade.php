<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script>
        document.documentElement.classList.add('js')
    </script>
    @fonts

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
            @layer properties {
                @supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))) {

                    *,
                    :before,
                    :after,
                    ::backdrop {
                        --tw-translate-x: 0;
                        --tw-translate-y: 0;
                        --tw-translate-z: 0;
                        --tw-rotate-x: initial;
                        --tw-rotate-y: initial;
                        --tw-rotate-z: initial;
                        --tw-skew-x: initial;
                        --tw-skew-y: initial;
                        --tw-space-x-reverse: 0;
                        --tw-border-style: solid;
                        --tw-leading: initial;
                        --tw-font-weight: initial;
                        --tw-tracking: initial;
                        --tw-shadow: 0 0 #0000;
                        --tw-shadow-color: initial;
                        --tw-shadow-alpha: 100%;
                        --tw-inset-shadow: 0 0 #0000;
                        --tw-inset-shadow-color: initial;
                        --tw-inset-shadow-alpha: 100%;
                        --tw-ring-color: initial;
                        --tw-ring-shadow: 0 0 #0000;
                        --tw-inset-ring-color: initial;
                        --tw-inset-ring-shadow: 0 0 #0000;
                        --tw-ring-inset: initial;
                        --tw-ring-offset-width: 0px;
                        --tw-ring-offset-color: #fff;
                        --tw-ring-offset-shadow: 0 0 #0000;
                        --tw-blur: initial;
                        --tw-brightness: initial;
                        --tw-contrast: initial;
                        --tw-grayscale: initial;
                        --tw-hue-rotate: initial;
                        --tw-invert: initial;
                        --tw-opacity: initial;
                        --tw-saturate: initial;
                        --tw-sepia: initial;
                        --tw-drop-shadow: initial;
                        --tw-drop-shadow-color: initial;
                        --tw-drop-shadow-alpha: 100%;
                        --tw-drop-shadow-size: initial;
                        --tw-duration: initial;
                        --tw-ease: initial;
                        --tw-content: ""
                    }
                }
            }

            @layer theme {

                :root,
                :host {
                    --font-sans: "Instrument Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                    --font-serif: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
                    --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                    --color-red-50: oklch(97.1% .013 17.38);
                    --color-red-100: oklch(93.6% .032 17.717);
                    --color-red-200: oklch(88.5% .062 18.334);
                    --color-red-300: oklch(80.8% .114 19.571);
                    --color-red-400: oklch(70.4% .191 22.216);
                    --color-red-500: oklch(63.7% .237 25.331);
                    --color-red-600: oklch(57.7% .245 27.325);
                    --color-red-700: oklch(50.5% .213 27.518);
                    --color-red-800: oklch(44.4% .177 26.899);
                    --color-red-900: oklch(39.6% .141 25.723);
                    --color-red-950: oklch(25.8% .092 26.042);
                    --color-orange-50: oklch(98% .016 73.684);
                    --color-orange-100: oklch(95.4% .038 75.164);
                    --color-orange-200: oklch(90.1% .076 70.697);
                    --color-orange-300: oklch(83.7% .128 66.29);
                    --color-orange-400: oklch(75% .183 55.934);
                    --color-orange-500: oklch(70.5% .213 47.604);
                    --color-orange-600: oklch(64.6% .222 41.116);
                    --color-orange-700: oklch(55.3% .195 38.402);
                    --color-orange-800: oklch(47% .157 37.304);
                    --color-orange-900: oklch(40.8% .123 38.172);
                    --color-orange-950: oklch(26.6% .079 36.259);
                    --color-amber-50: oklch(98.7% .022 95.277);
                    --color-amber-100: oklch(96.2% .059 95.617);
                    --color-amber-200: oklch(92.4% .12 95.746);
                    --color-amber-300: oklch(87.9% .169 91.605);
                    --color-amber-400: oklch(82.8% .189 84.429);
                    --color-amber-500: oklch(76.9% .188 70.08);
                    --color-amber-600: oklch(66.6% .179 58.318);
                    --color-amber-700: oklch(55.5% .163 48.998);
                    --color-amber-800: oklch(47.3% .137 46.201);
                    --color-amber-900: oklch(41.4% .112 45.904);
                    --color-amber-950: oklch(27.9% .077 45.635);
                    --color-yellow-50: oklch(98.7% .026 102.212);
                    --color-yellow-100: oklch(97.3% .071 103.193);
                    --color-yellow-200: oklch(94.5% .129 101.54);
                    --color-yellow-300: oklch(90.5% .182 98.111);
                    --color-yellow-400: oklch(85.2% .199 91.936);
                    --color-yellow-500: oklch(79.5% .184 86.047);
                    --color-yellow-600: oklch(68.1% .162 75.834);
                    --color-yellow-700: oklch(55.4% .135 66.442);
                    --color-yellow-800: oklch(47.6% .114 61.907);
                    --color-yellow-900: oklch(42.1% .095 57.708);
                    --color-yellow-950: oklch(28.6% .066 53.813);
                    --color-lime-50: oklch(98.6% .031 120.757);
                    --color-lime-100: oklch(96.7% .067 122.328);
                    --color-lime-200: oklch(93.8% .127 124.321);
                    --color-lime-300: oklch(89.7% .196 126.665);
                    --color-lime-400: oklch(84.1% .238 128.85);
                    --color-lime-500: oklch(76.8% .233 130.85);
                    --color-lime-600: oklch(64.8% .2 131.684);
                    --color-lime-700: oklch(53.2% .157 131.589);
                    --color-lime-800: oklch(45.3% .124 130.933);
                    --color-lime-900: oklch(40.5% .101 131.063);
                    --color-lime-950: oklch(27.4% .072 132.109);
                    --color-green-50: oklch(98.2% .018 155.826);
                    --color-green-100: oklch(96.2% .044 156.743);
                    --color-green-200: oklch(92.5% .084 155.995);
                    --color-green-300: oklch(87.1% .15 154.449);
                    --color-green-400: oklch(79.2% .209 151.711);
                    --color-green-500: oklch(72.3% .219 149.579);
                    --color-green-600: oklch(62.7% .194 149.214);
                    --color-green-700: oklch(52.7% .154 150.069);
                    --color-green-800: oklch(44.8% .119 151.328);
                    --color-green-900: oklch(39.3% .095 152.535);
                    --color-green-950: oklch(26.6% .065 152.934);
                    --color-emerald-50: oklch(97.9% .021 166.113);
                    --color-emerald-100: oklch(95% .052 163.051);
                    --color-emerald-200: oklch(90.5% .093 164.15);
                    --color-emerald-300: oklch(84.5% .143 164.978);
                    --color-emerald-400: oklch(76.5% .177 163.223);
                    --color-emerald-500: oklch(69.6% .17 162.48);
                    --color-emerald-600: oklch(59.6% .145 163.225);
                    --color-emerald-700: oklch(50.8% .118 165.612);
                    --color-emerald-800: oklch(43.2% .095 166.913);
                    --color-emerald-900: oklch(37.8% .077 168.94);
                    --color-emerald-950: oklch(26.2% .051 172.552);
                    --color-teal-50: oklch(98.4% .014 180.72);
                    --color-teal-100: oklch(95.3% .051 180.801);
                    --color-teal-200: oklch(91% .096 180.426);
                    --color-teal-300: oklch(85.5% .138 181.071);
                    --color-teal-400: oklch(77.7% .152 181.912);
                    --color-teal-500: oklch(70.4% .14 182.503);
                    --color-teal-600: oklch(60% .118 184.704);
                    --color-teal-700: oklch(51.1% .096 186.391);
                    --color-teal-800: oklch(43.7% .078 188.216);
                    --color-teal-900: oklch(38.6% .063 188.416);
                    --color-teal-950: oklch(27.7% .046 192.524);
                    --color-cyan-50: oklch(98.4% .019 200.873);
                    --color-cyan-100: oklch(95.6% .045 203.388);
                    --color-cyan-200: oklch(91.7% .08 205.041);
                    --color-cyan-300: oklch(86.5% .127 207.078);
                    --color-cyan-400: oklch(78.9% .154 211.53);
                    --color-cyan-500: oklch(71.5% .143 215.221);
                    --color-cyan-600: oklch(60.9% .126 221.723);
                    --color-cyan-700: oklch(52% .105 223.128);
                    --color-cyan-800: oklch(45% .085 224.283);
                    --color-cyan-900: oklch(39.8% .07 227.392);
                    --color-cyan-950: oklch(30.2% .056 229.695);
                    --color-sky-50: oklch(97.7% .013 236.62);
                    --color-sky-100: oklch(95.1% .026 236.824);
                    --color-sky-200: oklch(90.1% .058 230.902);
                    --color-sky-300: oklch(82.8% .111 230.318);
                    --color-sky-400: oklch(74.6% .16 232.661);
                    --color-sky-500: oklch(68.5% .169 237.323);
                    --color-sky-600: oklch(58.8% .158 241.966);
                    --color-sky-700: oklch(50% .134 242.749);
                    --color-sky-800: oklch(44.3% .11 240.79);
                    --color-sky-900: oklch(39.1% .09 240.876);
                    --color-sky-950: oklch(29.3% .066 243.157);
                    --color-blue-50: oklch(97% .014 254.604);
                    --color-blue-100: oklch(93.2% .032 255.585);
                    --color-blue-200: oklch(88.2% .059 254.128);
                    --color-blue-300: oklch(80.9% .105 251.813);
                    --color-blue-400: oklch(70.7% .165 254.624);
                    --color-blue-500: oklch(62.3% .214 259.815);
                    --color-blue-600: oklch(54.6% .245 262.881);
                    --color-blue-700: oklch(48.8% .243 264.376);
                    --color-blue-800: oklch(42.4% .199 265.638);
                    --color-blue-900: oklch(37.9% .146 265.522);
                    --color-blue-950: oklch(28.2% .091 267.935);
                    --color-indigo-50: oklch(96.2% .018 272.314);
                    --color-indigo-100: oklch(93% .034 272.788);
                    --color-indigo-200: oklch(87% .065 274.039);
                    --color-indigo-300: oklch(78.5% .115 274.713);
                    --color-indigo-400: oklch(67.3% .182 276.935);
                    --color-indigo-500: oklch(58.5% .233 277.117);
                    --color-indigo-600: oklch(51.1% .262 276.966);
                    --color-indigo-700: oklch(45.7% .24 277.023);
                    --color-indigo-800: oklch(39.8% .195 277.366);
                    --color-indigo-900: oklch(35.9% .144 278.697);
                    --color-indigo-950: oklch(25.7% .09 281.288);
                    --color-violet-50: oklch(96.9% .016 293.756);
                    --color-violet-100: oklch(94.3% .029 294.588);
                    --color-violet-200: oklch(89.4% .057 293.283);
                    --color-violet-300: oklch(81.1% .111 293.571);
                    --color-violet-400: oklch(70.2% .183 293.541);
                    --color-violet-500: oklch(60.6% .25 292.717);
                    --color-violet-600: oklch(54.1% .281 293.009);
                    --color-violet-700: oklch(49.1% .27 292.581);
                    --color-violet-800: oklch(43.2% .232 292.759);
                    --color-violet-900: oklch(38% .189 293.745);
                    --color-violet-950: oklch(28.3% .141 291.089);
                    --color-purple-50: oklch(97.7% .014 308.299);
                    --color-purple-100: oklch(94.6% .033 307.174);
                    --color-purple-200: oklch(90.2% .063 306.703);
                    --color-purple-300: oklch(82.7% .119 306.383);
                    --color-purple-400: oklch(71.4% .203 305.504);
                    --color-purple-500: oklch(62.7% .265 303.9);
                    --color-purple-600: oklch(55.8% .288 302.321);
                    --color-purple-700: oklch(49.6% .265 301.924);
                    --color-purple-800: oklch(43.8% .218 303.724);
                    --color-purple-900: oklch(38.1% .176 304.987);
                    --color-purple-950: oklch(29.1% .149 302.717);
                    --color-fuchsia-50: oklch(97.7% .017 320.058);
                    --color-fuchsia-100: oklch(95.2% .037 318.852);
                    --color-fuchsia-200: oklch(90.3% .076 319.62);
                    --color-fuchsia-300: oklch(83.3% .145 321.434);
                    --color-fuchsia-400: oklch(74% .238 322.16);
                    --color-fuchsia-500: oklch(66.7% .295 322.15);
                    --color-fuchsia-600: oklch(59.1% .293 322.896);
                    --color-fuchsia-700: oklch(51.8% .253 323.949);
                    --color-fuchsia-800: oklch(45.2% .211 324.591);
                    --color-fuchsia-900: oklch(40.1% .17 325.612);
                    --color-fuchsia-950: oklch(29.3% .136 325.661);
                    --color-pink-50: oklch(97.1% .014 343.198);
                    --color-pink-100: oklch(94.8% .028 342.258);
                    --color-pink-200: oklch(89.9% .061 343.231);
                    --color-pink-300: oklch(82.3% .12 346.018);
                    --color-pink-400: oklch(71.8% .202 349.761);
                    --color-pink-500: oklch(65.6% .241 354.308);
                    --color-pink-600: oklch(59.2% .249 .584);
                    --color-pink-700: oklch(52.5% .223 3.958);
                    --color-pink-800: oklch(45.9% .187 3.815);
                    --color-pink-900: oklch(40.8% .153 2.432);
                    --color-pink-950: oklch(28.4% .109 3.907);
                    --color-rose-50: oklch(96.9% .015 12.422);
                    --color-rose-100: oklch(94.1% .03 12.58);
                    --color-rose-200: oklch(89.2% .058 10.001);
                    --color-rose-300: oklch(81% .117 11.638);
                    --color-rose-400: oklch(71.2% .194 13.428);
                    --color-rose-500: oklch(64.5% .246 16.439);
                    --color-rose-600: oklch(58.6% .253 17.585);
                    --color-rose-700: oklch(51.4% .222 16.935);
                    --color-rose-800: oklch(45.5% .188 13.697);
                    --color-rose-900: oklch(41% .159 10.272);
                    --color-rose-950: oklch(27.1% .105 12.094);
                    --color-slate-50: oklch(98.4% .003 247.858);
                    --color-slate-100: oklch(96.8% .007 247.896);
                    --color-slate-200: oklch(92.9% .013 255.508);
                    --color-slate-300: oklch(86.9% .022 252.894);
                    --color-slate-400: oklch(70.4% .04 256.788);
                    --color-slate-500: oklch(55.4% .046 257.417);
                    --color-slate-600: oklch(44.6% .043 257.281);
                    --color-slate-700: oklch(37.2% .044 257.287);
                    --color-slate-800: oklch(27.9% .041 260.031);
                    --color-slate-900: oklch(20.8% .042 265.755);
                    --color-slate-950: oklch(12.9% .042 264.695);
                    --color-gray-50: oklch(98.5% .002 247.839);
                    --color-gray-100: oklch(96.7% .003 264.542);
                    --color-gray-200: oklch(92.8% .006 264.531);
                    --color-gray-300: oklch(87.2% .01 258.338);
                    --color-gray-400: oklch(70.7% .022 261.325);
                    --color-gray-500: oklch(55.1% .027 264.364);
                    --color-gray-600: oklch(44.6% .03 256.802);
                    --color-gray-700: oklch(37.3% .034 259.733);
                    --color-gray-800: oklch(27.8% .033 256.848);
                    --color-gray-900: oklch(21% .034 264.665);
                    --color-gray-950: oklch(13% .028 261.692);
                    --color-zinc-50: oklch(98.5% 0 0);
                    --color-zinc-100: oklch(96.7% .001 286.375);
                    --color-zinc-200: oklch(92% .004 286.32);
                    --color-zinc-300: oklch(87.1% .006 286.286);
                    --color-zinc-400: oklch(70.5% .015 286.067);
                    --color-zinc-500: oklch(55.2% .016 285.938);
                    --color-zinc-600: oklch(44.2% .017 285.786);
                    --color-zinc-700: oklch(37% .013 285.805);
                    --color-zinc-800: oklch(27.4% .006 286.033);
                    --color-zinc-900: oklch(21% .006 285.885);
                    --color-zinc-950: oklch(14.1% .005 285.823);
                    --color-neutral-50: oklch(98.5% 0 0);
                    --color-neutral-100: oklch(97% 0 0);
                    --color-neutral-200: oklch(92.2% 0 0);
                    --color-neutral-300: oklch(87% 0 0);
                    --color-neutral-400: oklch(70.8% 0 0);
                    --color-neutral-500: oklch(55.6% 0 0);
                    --color-neutral-600: oklch(43.9% 0 0);
                    --color-neutral-700: oklch(37.1% 0 0);
                    --color-neutral-800: oklch(26.9% 0 0);
                    --color-neutral-900: oklch(20.5% 0 0);
                    --color-neutral-950: oklch(14.5% 0 0);
                    --color-stone-50: oklch(98.5% .001 106.423);
                    --color-stone-100: oklch(97% .001 106.424);
                    --color-stone-200: oklch(92.3% .003 48.717);
                    --color-stone-300: oklch(86.9% .005 56.366);
                    --color-stone-400: oklch(70.9% .01 56.259);
                    --color-stone-500: oklch(55.3% .013 58.071);
                    --color-stone-600: oklch(44.4% .011 73.639);
                    --color-stone-700: oklch(37.4% .01 67.558);
                    --color-stone-800: oklch(26.8% .007 34.298);
                    --color-stone-900: oklch(21.6% .006 56.043);
                    --color-stone-950: oklch(14.7% .004 49.25);
                    --color-black: #000;
                    --color-white: #fff;
                    --spacing: .25rem;
                    --breakpoint-sm: 40rem;
                    --breakpoint-md: 48rem;
                    --breakpoint-lg: 64rem;
                    --breakpoint-xl: 80rem;
                    --breakpoint-2xl: 96rem;
                    --container-3xs: 16rem;
                    --container-2xs: 18rem;
                    --container-xs: 20rem;
                    --container-sm: 24rem;
                    --container-md: 28rem;
                    --container-lg: 32rem;
                    --container-xl: 36rem;
                    --container-2xl: 42rem;
                    --container-3xl: 48rem;
                    --container-4xl: 56rem;
                    --container-5xl: 64rem;
                    --container-6xl: 72rem;
                    --container-7xl: 80rem;
                    --text-xs: .75rem;
                    --text-xs--line-height: calc(1 / .75);
                    --text-sm: .875rem;
                    --text-sm--line-height: calc(1.25 / .875);
                    --text-base: 1rem;
                    --text-base--line-height: 1.5;
                    --text-lg: 1.125rem;
                    --text-lg--line-height: calc(1.75 / 1.125);
                    --text-xl: 1.25rem;
                    --text-xl--line-height: calc(1.75 / 1.25);
                    --text-2xl: 1.5rem;
                    --text-2xl--line-height: calc(2 / 1.5);
                    --text-3xl: 1.875rem;
                    --text-3xl--line-height: 1.2;
                    --text-4xl: 2.25rem;
                    --text-4xl--line-height: calc(2.5 / 2.25);
                    --text-5xl: 3rem;
                    --text-5xl--line-height: 1;
                    --text-6xl: 3.75rem;
                    --text-6xl--line-height: 1;
                    --text-7xl: 4.5rem;
                    --text-7xl--line-height: 1;
                    --text-8xl: 6rem;
                    --text-8xl--line-height: 1;
                    --text-9xl: 8rem;
                    --text-9xl--line-height: 1;
                    --font-weight-thin: 100;
                    --font-weight-extralight: 200;
                    --font-weight-light: 300;
                    --font-weight-normal: 400;
                    --font-weight-medium: 500;
                    --font-weight-semibold: 600;
                    --font-weight-bold: 700;
                    --font-weight-extrabold: 800;
                    --font-weight-black: 900;
                    --tracking-tighter: -.05em;
                    --tracking-tight: -.025em;
                    --tracking-normal: 0em;
                    --tracking-wide: .025em;
                    --tracking-wider: .05em;
                    --tracking-widest: .1em;
                    --leading-tight: 1.25;
                    --leading-snug: 1.375;
                    --leading-normal: 1.5;
                    --leading-relaxed: 1.625;
                    --leading-loose: 2;
                    --radius-xs: .125rem;
                    --radius-sm: .25rem;
                    --radius-md: .375rem;
                    --radius-lg: .5rem;
                    --radius-xl: .75rem;
                    --radius-2xl: 1rem;
                    --radius-3xl: 1.5rem;
                    --radius-4xl: 2rem;
                    --shadow-2xs: 0 1px #0000000d;
                    --shadow-xs: 0 1px 2px 0 #0000000d;
                    --shadow-sm: 0 1px 3px 0 #0000001a, 0 1px 2px -1px #0000001a;
                    --shadow-md: 0 4px 6px -1px #0000001a, 0 2px 4px -2px #0000001a;
                    --shadow-lg: 0 10px 15px -3px #0000001a, 0 4px 6px -4px #0000001a;
                    --shadow-xl: 0 20px 25px -5px #0000001a, 0 8px 10px -6px #0000001a;
                    --shadow-2xl: 0 25px 50px -12px #00000040;
                    --inset-shadow-2xs: inset 0 1px #0000000d;
                    --inset-shadow-xs: inset 0 1px 1px #0000000d;
                    --inset-shadow-sm: inset 0 2px 4px #0000000d;
                    --drop-shadow-xs: 0 1px 1px #0000000d;
                    --drop-shadow-sm: 0 1px 2px #00000026;
                    --drop-shadow-md: 0 3px 3px #0000001f;
                    --drop-shadow-lg: 0 4px 4px #00000026;
                    --drop-shadow-xl: 0 9px 7px #0000001a;
                    --drop-shadow-2xl: 0 25px 25px #00000026;
                    --ease-in: cubic-bezier(.4, 0, 1, 1);
                    --ease-out: cubic-bezier(0, 0, .2, 1);
                    --ease-in-out: cubic-bezier(.4, 0, .2, 1);
                    --animate-spin: spin 1s linear infinite;
                    --animate-ping: ping 1s cubic-bezier(0, 0, .2, 1) infinite;
                    --animate-pulse: pulse 2s cubic-bezier(.4, 0, .6, 1) infinite;
                    --animate-bounce: bounce 1s infinite;
                    --blur-xs: 4px;
                    --blur-sm: 8px;
                    --blur-md: 12px;
                    --blur-lg: 16px;
                    --blur-xl: 24px;
                    --blur-2xl: 40px;
                    --blur-3xl: 64px;
                    --perspective-dramatic: 100px;
                    --perspective-near: 300px;
                    --perspective-normal: 500px;
                    --perspective-midrange: 800px;
                    --perspective-distant: 1200px;
                    --aspect-video: 16 / 9;
                    --default-transition-duration: .15s;
                    --default-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                    --default-font-family: var(--font-sans);
                    --default-mono-font-family: var(--font-mono)
                }
            }

            @layer base {

                *,
                :after,
                :before,
                ::backdrop {
                    box-sizing: border-box;
                    border: 0 solid;
                    margin: 0;
                    padding: 0
                }

                ::file-selector-button {
                    box-sizing: border-box;
                    border: 0 solid;
                    margin: 0;
                    padding: 0
                }

                html,
                :host {
                    -webkit-text-size-adjust: 100%;
                    tab-size: 4;
                    line-height: 1.5;
                    font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
                    font-feature-settings: var(--default-font-feature-settings, normal);
                    font-variation-settings: var(--default-font-variation-settings, normal);
                    -webkit-tap-highlight-color: transparent
                }

                hr {
                    height: 0;
                    color: inherit;
                    border-top-width: 1px
                }

                abbr:where([title]) {
                    -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted
                }

                h1,
                h2,
                h3,
                h4,
                h5,
                h6 {
                    font-size: inherit;
                    font-weight: inherit
                }

                a {
                    color: inherit;
                    -webkit-text-decoration: inherit;
                    text-decoration: inherit
                }

                b,
                strong {
                    font-weight: bolder
                }

                code,
                kbd,
                samp,
                pre {
                    font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
                    font-feature-settings: var(--default-mono-font-feature-settings, normal);
                    font-variation-settings: var(--default-mono-font-variation-settings, normal);
                    font-size: 1em
                }

                small {
                    font-size: 80%
                }

                sub,
                sup {
                    vertical-align: baseline;
                    font-size: 75%;
                    line-height: 0;
                    position: relative
                }

                sub {
                    bottom: -.25em
                }

                sup {
                    top: -.5em
                }

                table {
                    text-indent: 0;
                    border-color: inherit;
                    border-collapse: collapse
                }

                :-moz-focusring {
                    outline: auto
                }

                progress {
                    vertical-align: baseline
                }

                summary {
                    display: list-item
                }

                ol,
                ul,
                menu {
                    list-style: none
                }

                img,
                svg,
                video,
                canvas,
                audio,
                iframe,
                embed,
                object {
                    vertical-align: middle;
                    display: block
                }

                img,
                video {
                    max-width: 100%;
                    height: auto
                }

                button,
                input,
                select,
                optgroup,
                textarea {
                    font: inherit;
                    font-feature-settings: inherit;
                    font-variation-settings: inherit;
                    letter-spacing: inherit;
                    color: inherit;
                    opacity: 1;
                    background-color: #0000;
                    border-radius: 0
                }

                ::file-selector-button {
                    font: inherit;
                    font-feature-settings: inherit;
                    font-variation-settings: inherit;
                    letter-spacing: inherit;
                    color: inherit;
                    opacity: 1;
                    background-color: #0000;
                    border-radius: 0
                }

                :where(select:is([multiple], [size])) optgroup {
                    font-weight: bolder
                }

                :where(select:is([multiple], [size])) optgroup option {
                    padding-inline-start: 20px
                }

                ::file-selector-button {
                    margin-inline-end: 4px
                }

                ::placeholder {
                    opacity: 1
                }

                @supports (not ((-webkit-appearance:-apple-pay-button))) or (contain-intrinsic-size:1px) {
                    ::placeholder {
                        color: currentColor
                    }

                    @supports (color:color-mix(in lab, red, red)) {
                        ::placeholder {
                            color: color-mix(in oklab, currentcolor 50%, transparent)
                        }
                    }
                }

                textarea {
                    resize: vertical
                }

                ::-webkit-search-decoration {
                    -webkit-appearance: none
                }

                ::-webkit-date-and-time-value {
                    min-height: 1lh;
                    text-align: inherit
                }

                ::-webkit-datetime-edit {
                    display: inline-flex
                }

                ::-webkit-datetime-edit-fields-wrapper {
                    padding: 0
                }

                ::-webkit-datetime-edit {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-year-field {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-month-field {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-day-field {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-hour-field {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-minute-field {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-second-field {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-millisecond-field {
                    padding-block: 0
                }

                ::-webkit-datetime-edit-meridiem-field {
                    padding-block: 0
                }

                ::-webkit-calendar-picker-indicator {
                    line-height: 1
                }

                :-moz-ui-invalid {
                    box-shadow: none
                }

                button,
                input:where([type=button], [type=reset], [type=submit]) {
                    appearance: button
                }

                ::file-selector-button {
                    appearance: button
                }

                ::-webkit-inner-spin-button {
                    height: auto
                }

                ::-webkit-outer-spin-button {
                    height: auto
                }

                [hidden]:where(:not([hidden=until-found])) {
                    display: none !important
                }
            }

            @layer components;

            @layer utilities {
                .absolute {
                    position: absolute
                }

                .fixed {
                    position: fixed
                }

                .relative {
                    position: relative
                }

                .static {
                    position: static
                }

                .inset-0 {
                    inset: calc(var(--spacing) * 0)
                }

                .start {
                    inset-inline-start: var(--spacing)
                }

                .top-0 {
                    top: calc(var(--spacing) * 0)
                }

                .right-0 {
                    right: calc(var(--spacing) * 0)
                }

                .container {
                    width: 100%
                }

                @media(min-width:40rem) {
                    .container {
                        max-width: 40rem
                    }
                }

                @media(min-width:48rem) {
                    .container {
                        max-width: 48rem
                    }
                }

                @media(min-width:64rem) {
                    .container {
                        max-width: 64rem
                    }
                }

                @media(min-width:80rem) {
                    .container {
                        max-width: 80rem
                    }
                }

                @media(min-width:96rem) {
                    .container {
                        max-width: 96rem
                    }
                }

                .mx-auto {
                    margin-inline: auto
                }

                .-mt-\[6\.6rem\] {
                    margin-top: -6.6rem
                }

                .-mt-px {
                    margin-top: -1px
                }

                .mt-2 {
                    margin-top: calc(var(--spacing) * 2)
                }

                .mt-4 {
                    margin-top: calc(var(--spacing) * 4)
                }

                .mt-6 {
                    margin-top: calc(var(--spacing) * 6)
                }

                .mt-8 {
                    margin-top: calc(var(--spacing) * 8)
                }

                .mr-2 {
                    margin-right: calc(var(--spacing) * 2)
                }

                .-mb-px {
                    margin-bottom: -1px
                }

                .mb-1 {
                    margin-bottom: calc(var(--spacing) * 1)
                }

                .mb-2 {
                    margin-bottom: calc(var(--spacing) * 2)
                }

                .mb-4 {
                    margin-bottom: calc(var(--spacing) * 4)
                }

                .mb-6 {
                    margin-bottom: calc(var(--spacing) * 6)
                }

                .-ml-8 {
                    margin-left: calc(var(--spacing) * -8)
                }

                .-ml-px {
                    margin-left: -1px
                }

                .ml-1 {
                    margin-left: calc(var(--spacing) * 1)
                }

                .ml-2 {
                    margin-left: calc(var(--spacing) * 2)
                }

                .ml-4 {
                    margin-left: calc(var(--spacing) * 4)
                }

                .ml-12 {
                    margin-left: calc(var(--spacing) * 12)
                }

                .contents {
                    display: contents
                }

                .flex {
                    display: flex
                }

                .grid {
                    display: grid
                }

                .hidden {
                    display: none
                }

                .inline-block {
                    display: inline-block
                }

                .inline-flex {
                    display: inline-flex
                }

                .table {
                    display: table
                }

                .aspect-\[335\/364\] {
                    aspect-ratio: 335/364
                }

                .h-1 {
                    height: calc(var(--spacing) * 1)
                }

                .h-1\.5 {
                    height: calc(var(--spacing) * 1.5)
                }

                .h-2 {
                    height: calc(var(--spacing) * 2)
                }

                .h-2\.5 {
                    height: calc(var(--spacing) * 2.5)
                }

                .h-3 {
                    height: calc(var(--spacing) * 3)
                }

                .h-3\.5 {
                    height: calc(var(--spacing) * 3.5)
                }

                .h-5 {
                    height: calc(var(--spacing) * 5)
                }

                .h-8 {
                    height: calc(var(--spacing) * 8)
                }

                .h-14 {
                    height: calc(var(--spacing) * 14)
                }

                .h-14\.5 {
                    height: calc(var(--spacing) * 14.5)
                }

                .h-16 {
                    height: calc(var(--spacing) * 16)
                }

                .min-h-screen {
                    min-height: 100vh
                }

                .w-1 {
                    width: calc(var(--spacing) * 1)
                }

                .w-1\.5 {
                    width: calc(var(--spacing) * 1.5)
                }

                .w-2 {
                    width: calc(var(--spacing) * 2)
                }

                .w-2\.5 {
                    width: calc(var(--spacing) * 2.5)
                }

                .w-3 {
                    width: calc(var(--spacing) * 3)
                }

                .w-3\.5 {
                    width: calc(var(--spacing) * 3.5)
                }

                .w-5 {
                    width: calc(var(--spacing) * 5)
                }

                .w-8 {
                    width: calc(var(--spacing) * 8)
                }

                .w-\[438px\] {
                    width: 438px
                }

                .w-auto {
                    width: auto
                }

                .w-full {
                    width: 100%
                }

                .max-w-6xl {
                    max-width: var(--container-6xl)
                }

                .max-w-\[335px\] {
                    max-width: 335px
                }

                .max-w-none {
                    max-width: none
                }

                .max-w-xl {
                    max-width: var(--container-xl)
                }

                .flex-1 {
                    flex: 1
                }

                .shrink-0 {
                    flex-shrink: 0
                }

                .translate-y-0 {
                    --tw-translate-y: calc(var(--spacing) * 0);
                    translate: var(--tw-translate-x) var(--tw-translate-y)
                }

                .transform {
                    transform: var(--tw-rotate-x, ) var(--tw-rotate-y, ) var(--tw-rotate-z, ) var(--tw-skew-x, ) var(--tw-skew-y, )
                }

                .cursor-default {
                    cursor: default
                }

                .cursor-not-allowed {
                    cursor: not-allowed
                }

                .grid-cols-1 {
                    grid-template-columns: repeat(1, minmax(0, 1fr))
                }

                .flex-col {
                    flex-direction: column
                }

                .flex-col-reverse {
                    flex-direction: column-reverse
                }

                .items-center {
                    align-items: center
                }

                .justify-between {
                    justify-content: space-between
                }

                .justify-center {
                    justify-content: center
                }

                .justify-end {
                    justify-content: flex-end
                }

                .justify-items-center {
                    justify-items: center
                }

                .gap-2 {
                    gap: calc(var(--spacing) * 2)
                }

                .gap-3 {
                    gap: calc(var(--spacing) * 3)
                }

                .gap-4 {
                    gap: calc(var(--spacing) * 4)
                }

                :where(.space-x-1>:not(:last-child)) {
                    --tw-space-x-reverse: 0;
                    margin-inline-start: calc(calc(var(--spacing) * 1) * var(--tw-space-x-reverse));
                    margin-inline-end: calc(calc(var(--spacing) * 1) * calc(1 - var(--tw-space-x-reverse)))
                }

                .overflow-hidden {
                    overflow: hidden
                }

                .rounded-full {
                    border-radius: 3.40282e38px
                }

                .rounded-md {
                    border-radius: var(--radius-md)
                }

                .rounded-sm {
                    border-radius: var(--radius-sm)
                }

                .rounded-t-lg {
                    border-top-left-radius: var(--radius-lg);
                    border-top-right-radius: var(--radius-lg)
                }

                .rounded-l-md {
                    border-top-left-radius: var(--radius-md);
                    border-bottom-left-radius: var(--radius-md)
                }

                .rounded-r-md {
                    border-top-right-radius: var(--radius-md);
                    border-bottom-right-radius: var(--radius-md)
                }

                .rounded-br-lg {
                    border-bottom-right-radius: var(--radius-lg)
                }

                .rounded-bl-lg {
                    border-bottom-left-radius: var(--radius-lg)
                }

                .border {
                    border-style: var(--tw-border-style);
                    border-width: 1px
                }

                .border-t {
                    border-top-style: var(--tw-border-style);
                    border-top-width: 1px
                }

                .border-r {
                    border-right-style: var(--tw-border-style);
                    border-right-width: 1px
                }

                .border-\[\#19140035\] {
                    border-color: #19140035
                }

                .border-\[\#e3e3e0\] {
                    border-color: #e3e3e0
                }

                .border-black {
                    border-color: var(--color-black)
                }

                .border-gray-200 {
                    border-color: var(--color-gray-200)
                }

                .border-gray-300 {
                    border-color: var(--color-gray-300)
                }

                .border-gray-400 {
                    border-color: var(--color-gray-400)
                }

                .border-transparent {
                    border-color: #0000
                }

                .bg-\[\#1b1b18\] {
                    background-color: #1b1b18
                }

                .bg-\[\#FDFDFC\] {
                    background-color: #fdfdfc
                }

                .bg-\[\#dbdbd7\] {
                    background-color: #dbdbd7
                }

                .bg-\[\#fff2f2\] {
                    background-color: #fff2f2
                }

                .bg-gray-100 {
                    background-color: var(--color-gray-100)
                }

                .bg-gray-200 {
                    background-color: var(--color-gray-200)
                }

                .bg-white {
                    background-color: var(--color-white)
                }

                .p-6 {
                    padding: calc(var(--spacing) * 6)
                }

                .px-2 {
                    padding-inline: calc(var(--spacing) * 2)
                }

                .px-4 {
                    padding-inline: calc(var(--spacing) * 4)
                }

                .px-5 {
                    padding-inline: calc(var(--spacing) * 5)
                }

                .px-6 {
                    padding-inline: calc(var(--spacing) * 6)
                }

                .py-1 {
                    padding-block: calc(var(--spacing) * 1)
                }

                .py-1\.5 {
                    padding-block: calc(var(--spacing) * 1.5)
                }

                .py-2 {
                    padding-block: calc(var(--spacing) * 2)
                }

                .py-4 {
                    padding-block: calc(var(--spacing) * 4)
                }

                .pt-8 {
                    padding-top: calc(var(--spacing) * 8)
                }

                .pb-6 {
                    padding-bottom: calc(var(--spacing) * 6)
                }

                .pb-12 {
                    padding-bottom: calc(var(--spacing) * 12)
                }

                .text-center {
                    text-align: center
                }

                .text-lg {
                    font-size: var(--text-lg);
                    line-height: var(--tw-leading, var(--text-lg--line-height))
                }

                .text-sm {
                    font-size: var(--text-sm);
                    line-height: var(--tw-leading, var(--text-sm--line-height))
                }

                .text-\[13px\] {
                    font-size: 13px
                }

                .leading-5 {
                    --tw-leading: calc(var(--spacing) * 5);
                    line-height: calc(var(--spacing) * 5)
                }

                .leading-7 {
                    --tw-leading: calc(var(--spacing) * 7);
                    line-height: calc(var(--spacing) * 7)
                }

                .leading-\[20px\] {
                    --tw-leading: 20px;
                    line-height: 20px
                }

                .leading-normal {
                    --tw-leading: var(--leading-normal);
                    line-height: var(--leading-normal)
                }

                .font-medium {
                    --tw-font-weight: var(--font-weight-medium);
                    font-weight: var(--font-weight-medium)
                }

                .font-semibold {
                    --tw-font-weight: var(--font-weight-semibold);
                    font-weight: var(--font-weight-semibold)
                }

                .tracking-wider {
                    --tw-tracking: var(--tracking-wider);
                    letter-spacing: var(--tracking-wider)
                }

                .text-\[\#1B1B18\],
                .text-\[\#1b1b18\] {
                    color: #1b1b18
                }

                .text-\[\#706f6c\] {
                    color: #706f6c
                }

                .text-\[\#F3BEC7\] {
                    color: #f3bec7
                }

                .text-\[\#F8B803\] {
                    color: #f8b803
                }

                .text-\[\#F53003\],
                .text-\[\#f53003\] {
                    color: #f53003
                }

                .text-gray-200 {
                    color: var(--color-gray-200)
                }

                .text-gray-300 {
                    color: var(--color-gray-300)
                }

                .text-gray-400 {
                    color: var(--color-gray-400)
                }

                .text-gray-500 {
                    color: var(--color-gray-500)
                }

                .text-gray-600 {
                    color: var(--color-gray-600)
                }

                .text-gray-700 {
                    color: var(--color-gray-700)
                }

                .text-gray-800 {
                    color: var(--color-gray-800)
                }

                .text-gray-900 {
                    color: var(--color-gray-900)
                }

                .text-white {
                    color: var(--color-white)
                }

                .uppercase {
                    text-transform: uppercase
                }

                .underline {
                    text-decoration-line: underline
                }

                .underline-offset-4 {
                    text-underline-offset: 4px
                }

                .antialiased {
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale
                }

                .opacity-100 {
                    opacity: 1
                }

                .mix-blend-color {
                    mix-blend-mode: color
                }

                .mix-blend-darken {
                    mix-blend-mode: darken
                }

                .mix-blend-hard-light {
                    mix-blend-mode: hard-light
                }

                .mix-blend-multiply {
                    mix-blend-mode: multiply
                }

                .shadow {
                    --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, #0000001a), 0 1px 2px -1px var(--tw-shadow-color, #0000001a);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\] {
                    --tw-shadow: 0px 0px 1px 0px var(--tw-shadow-color, #00000008), 0px 1px 2px 0px var(--tw-shadow-color, #0000000f);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\] {
                    --tw-shadow: inset 0px 0px 0px 1px var(--tw-shadow-color, #1a1a0029);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .shadow-sm {
                    --tw-shadow: 0 1px 3px 0 var(--tw-shadow-color, #0000001a), 0 1px 2px -1px var(--tw-shadow-color, #0000001a);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .ring-gray-300 {
                    --tw-ring-color: var(--color-gray-300)
                }

                .filter {
                    filter: var(--tw-blur, ) var(--tw-brightness, ) var(--tw-contrast, ) var(--tw-grayscale, ) var(--tw-hue-rotate, ) var(--tw-invert, ) var(--tw-saturate, ) var(--tw-sepia, ) var(--tw-drop-shadow, )
                }

                .transition {
                    transition-property: color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, --tw-gradient-from, --tw-gradient-via, --tw-gradient-to, opacity, box-shadow, transform, translate, scale, rotate, filter, -webkit-backdrop-filter, backdrop-filter, display, content-visibility, overlay, pointer-events;
                    transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                    transition-duration: var(--tw-duration, var(--default-transition-duration))
                }

                .transition-all {
                    transition-property: all;
                    transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                    transition-duration: var(--tw-duration, var(--default-transition-duration))
                }

                .transition-opacity {
                    transition-property: opacity;
                    transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                    transition-duration: var(--tw-duration, var(--default-transition-duration))
                }

                .delay-200 {
                    transition-delay: .2s
                }

                .delay-300 {
                    transition-delay: .3s
                }

                .delay-400 {
                    transition-delay: .4s
                }

                .duration-150 {
                    --tw-duration: .15s;
                    transition-duration: .15s
                }

                .duration-750 {
                    --tw-duration: .75s;
                    transition-duration: .75s
                }

                .ease-in-out {
                    --tw-ease: var(--ease-in-out);
                    transition-timing-function: var(--ease-in-out)
                }

                .\[--stroke-color\:\#1B1B18\] {
                    --stroke-color: #1b1b18
                }

                .not-has-\[nav\]\:hidden:not(:has(:is(nav))) {
                    display: none
                }

                .before\:absolute:before {
                    content: var(--tw-content);
                    position: absolute
                }

                .before\:top-0:before {
                    content: var(--tw-content);
                    top: calc(var(--spacing) * 0)
                }

                .before\:top-1\/2:before {
                    content: var(--tw-content);
                    top: 50%
                }

                .before\:bottom-0:before {
                    content: var(--tw-content);
                    bottom: calc(var(--spacing) * 0)
                }

                .before\:bottom-1\/2:before {
                    content: var(--tw-content);
                    bottom: 50%
                }

                .before\:left-\[0\.4rem\]:before {
                    content: var(--tw-content);
                    left: .4rem
                }

                .before\:border-l:before {
                    content: var(--tw-content);
                    border-left-style: var(--tw-border-style);
                    border-left-width: 1px
                }

                .before\:border-\[\#e3e3e0\]:before {
                    content: var(--tw-content);
                    border-color: #e3e3e0
                }

                @media(hover:hover) {
                    .hover\:border-\[\#1915014a\]:hover {
                        border-color: #1915014a
                    }

                    .hover\:border-\[\#19140035\]:hover {
                        border-color: #19140035
                    }

                    .hover\:border-black:hover {
                        border-color: var(--color-black)
                    }

                    .hover\:bg-black:hover {
                        background-color: var(--color-black)
                    }

                    .hover\:bg-gray-100:hover {
                        background-color: var(--color-gray-100)
                    }

                    .hover\:text-gray-400:hover {
                        color: var(--color-gray-400)
                    }

                    .hover\:text-gray-700:hover {
                        color: var(--color-gray-700)
                    }
                }

                .focus\:border-blue-300:focus {
                    border-color: var(--color-blue-300)
                }

                .focus\:ring:focus {
                    --tw-ring-shadow: var(--tw-ring-inset, ) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color, currentcolor);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .focus\:outline-none:focus {
                    --tw-outline-style: none;
                    outline-style: none
                }

                .active\:bg-gray-100:active {
                    background-color: var(--color-gray-100)
                }

                .active\:text-gray-500:active {
                    color: var(--color-gray-500)
                }

                .active\:text-gray-700:active {
                    color: var(--color-gray-700)
                }

                .active\:text-gray-800:active {
                    color: var(--color-gray-800)
                }

                @media(min-width:40rem) {
                    .sm\:flex {
                        display: flex
                    }

                    .sm\:hidden {
                        display: none
                    }

                    .sm\:flex-1 {
                        flex: 1
                    }

                    .sm\:items-center {
                        align-items: center
                    }

                    .sm\:justify-between {
                        justify-content: space-between
                    }

                    .sm\:justify-start {
                        justify-content: flex-start
                    }

                    .sm\:gap-2 {
                        gap: calc(var(--spacing) * 2)
                    }

                    .sm\:px-6 {
                        padding-inline: calc(var(--spacing) * 6)
                    }

                    .sm\:pt-0 {
                        padding-top: calc(var(--spacing) * 0)
                    }
                }

                @media(min-width:64rem) {
                    .lg\:mt-10 {
                        margin-top: calc(var(--spacing) * 10)
                    }

                    .lg\:mb-0 {
                        margin-bottom: calc(var(--spacing) * 0)
                    }

                    .lg\:mb-6 {
                        margin-bottom: calc(var(--spacing) * 6)
                    }

                    .lg\:-ml-px {
                        margin-left: -1px
                    }

                    .lg\:ml-0 {
                        margin-left: calc(var(--spacing) * 0)
                    }

                    .lg\:block {
                        display: block
                    }

                    .lg\:aspect-auto {
                        aspect-ratio: auto
                    }

                    .lg\:w-\[438px\] {
                        width: 438px
                    }

                    .lg\:max-w-4xl {
                        max-width: var(--container-4xl)
                    }

                    .lg\:grow {
                        flex-grow: 1
                    }

                    .lg\:flex-row {
                        flex-direction: row
                    }

                    .lg\:justify-center {
                        justify-content: center
                    }

                    .lg\:rounded-t-none {
                        border-top-left-radius: 0;
                        border-top-right-radius: 0
                    }

                    .lg\:rounded-tl-lg {
                        border-top-left-radius: var(--radius-lg)
                    }

                    .lg\:rounded-r-lg {
                        border-top-right-radius: var(--radius-lg);
                        border-bottom-right-radius: var(--radius-lg)
                    }

                    .lg\:rounded-br-none {
                        border-bottom-right-radius: 0
                    }

                    .lg\:p-8 {
                        padding: calc(var(--spacing) * 8)
                    }

                    .lg\:p-20 {
                        padding: calc(var(--spacing) * 20)
                    }

                    .lg\:px-8 {
                        padding-inline: calc(var(--spacing) * 8)
                    }

                    .lg\:pb-10 {
                        padding-bottom: calc(var(--spacing) * 10)
                    }
                }

                .rtl\:flex-row-reverse:where(:dir(rtl), [dir=rtl], [dir=rtl] *) {
                    flex-direction: row-reverse
                }

                @media(prefers-color-scheme:dark) {
                    .dark\:border-\[\#3E3E3A\] {
                        border-color: #3e3e3a
                    }

                    .dark\:border-\[\#eeeeec\] {
                        border-color: #eeeeec
                    }

                    .dark\:border-gray-600 {
                        border-color: var(--color-gray-600)
                    }

                    .dark\:bg-\[\#0a0a0a\] {
                        background-color: #0a0a0a
                    }

                    .dark\:bg-\[\#1D0002\] {
                        background-color: #1d0002
                    }

                    .dark\:bg-\[\#3E3E3A\] {
                        background-color: #3e3e3a
                    }

                    .dark\:bg-\[\#161615\] {
                        background-color: #161615
                    }

                    .dark\:bg-\[\#eeeeec\] {
                        background-color: #eeeeec
                    }

                    .dark\:bg-gray-700 {
                        background-color: var(--color-gray-700)
                    }

                    .dark\:bg-gray-800 {
                        background-color: var(--color-gray-800)
                    }

                    .dark\:bg-gray-900 {
                        background-color: var(--color-gray-900)
                    }

                    .dark\:text-\[\#1C1C1A\] {
                        color: #1c1c1a
                    }

                    .dark\:text-\[\#4B0600\] {
                        color: #4b0600
                    }

                    .dark\:text-\[\#391800\] {
                        color: #391800
                    }

                    .dark\:text-\[\#733000\] {
                        color: #733000
                    }

                    .dark\:text-\[\#A1A09A\] {
                        color: #a1a09a
                    }

                    .dark\:text-\[\#EDEDEC\] {
                        color: #ededec
                    }

                    .dark\:text-\[\#F61500\] {
                        color: #f61500
                    }

                    .dark\:text-\[\#FF4433\] {
                        color: #f43
                    }

                    .dark\:text-black {
                        color: var(--color-black)
                    }

                    .dark\:text-gray-200 {
                        color: var(--color-gray-200)
                    }

                    .dark\:text-gray-300 {
                        color: var(--color-gray-300)
                    }

                    .dark\:text-gray-400 {
                        color: var(--color-gray-400)
                    }

                    .dark\:text-gray-600 {
                        color: var(--color-gray-600)
                    }

                    .dark\:mix-blend-hard-light {
                        mix-blend-mode: hard-light
                    }

                    .dark\:mix-blend-normal {
                        mix-blend-mode: normal
                    }

                    .dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\] {
                        --tw-shadow: inset 0px 0px 0px 1px var(--tw-shadow-color, #fffaed2d);
                        box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                    }

                    .dark\:\[--stroke-color\:\#FF750F\] {
                        --stroke-color: #ff750f
                    }

                    .dark\:before\:border-\[\#3E3E3A\]:before {
                        content: var(--tw-content);
                        border-color: #3e3e3a
                    }

                    @media(hover:hover) {
                        .dark\:hover\:border-\[\#3E3E3A\]:hover {
                            border-color: #3e3e3a
                        }

                        .dark\:hover\:border-\[\#62605b\]:hover {
                            border-color: #62605b
                        }

                        .dark\:hover\:border-white:hover {
                            border-color: var(--color-white)
                        }

                        .dark\:hover\:bg-gray-900:hover {
                            background-color: var(--color-gray-900)
                        }

                        .dark\:hover\:bg-white:hover {
                            background-color: var(--color-white)
                        }

                        .dark\:hover\:text-gray-200:hover {
                            color: var(--color-gray-200)
                        }

                        .dark\:hover\:text-gray-300:hover {
                            color: var(--color-gray-300)
                        }
                    }

                    .dark\:focus\:border-blue-700:focus {
                        border-color: var(--color-blue-700)
                    }

                    .dark\:focus\:border-blue-800:focus {
                        border-color: var(--color-blue-800)
                    }

                    .dark\:active\:bg-gray-700:active {
                        background-color: var(--color-gray-700)
                    }

                    .dark\:active\:text-gray-300:active {
                        color: var(--color-gray-300)
                    }
                }

                @starting-style {
                    .starting\:opacity-0 {
                        opacity: 0
                    }
                }

                @media(prefers-reduced-motion:no-preference) {
                    @starting-style {
                        .motion-safe\:starting\:-translate-x-\[26px\] {
                            --tw-translate-x: -26px;
                            translate: var(--tw-translate-x) var(--tw-translate-y)
                        }
                    }

                    @starting-style {
                        .motion-safe\:starting\:-translate-x-\[51px\] {
                            --tw-translate-x: -51px;
                            translate: var(--tw-translate-x) var(--tw-translate-y)
                        }
                    }

                    @starting-style {
                        .motion-safe\:starting\:-translate-x-\[78px\] {
                            --tw-translate-x: -78px;
                            translate: var(--tw-translate-x) var(--tw-translate-y)
                        }
                    }

                    @starting-style {
                        .motion-safe\:starting\:-translate-x-\[102px\] {
                            --tw-translate-x: -102px;
                            translate: var(--tw-translate-x) var(--tw-translate-y)
                        }
                    }

                    @starting-style {
                        .motion-safe\:starting\:translate-y-6 {
                            --tw-translate-y: calc(var(--spacing) * 6);
                            translate: var(--tw-translate-x) var(--tw-translate-y)
                        }
                    }
                }
            }

            @property --tw-translate-x {
                syntax: "*";
                inherits: false;
                initial-value: 0
            }

            @property --tw-translate-y {
                syntax: "*";
                inherits: false;
                initial-value: 0
            }

            @property --tw-translate-z {
                syntax: "*";
                inherits: false;
                initial-value: 0
            }

            @property --tw-rotate-x {
                syntax: "*";
                inherits: false
            }

            @property --tw-rotate-y {
                syntax: "*";
                inherits: false
            }

            @property --tw-rotate-z {
                syntax: "*";
                inherits: false
            }

            @property --tw-skew-x {
                syntax: "*";
                inherits: false
            }

            @property --tw-skew-y {
                syntax: "*";
                inherits: false
            }

            @property --tw-space-x-reverse {
                syntax: "*";
                inherits: false;
                initial-value: 0
            }

            @property --tw-border-style {
                syntax: "*";
                inherits: false;
                initial-value: solid
            }

            @property --tw-leading {
                syntax: "*";
                inherits: false
            }

            @property --tw-font-weight {
                syntax: "*";
                inherits: false
            }

            @property --tw-tracking {
                syntax: "*";
                inherits: false
            }

            @property --tw-shadow {
                syntax: "*";
                inherits: false;
                initial-value: 0 0 #0000
            }

            @property --tw-shadow-color {
                syntax: "*";
                inherits: false
            }

            @property --tw-shadow-alpha {
                syntax: "<percentage>";
                inherits: false;
                initial-value: 100%
            }

            @property --tw-inset-shadow {
                syntax: "*";
                inherits: false;
                initial-value: 0 0 #0000
            }

            @property --tw-inset-shadow-color {
                syntax: "*";
                inherits: false
            }

            @property --tw-inset-shadow-alpha {
                syntax: "<percentage>";
                inherits: false;
                initial-value: 100%
            }

            @property --tw-ring-color {
                syntax: "*";
                inherits: false
            }

            @property --tw-ring-shadow {
                syntax: "*";
                inherits: false;
                initial-value: 0 0 #0000
            }

            @property --tw-inset-ring-color {
                syntax: "*";
                inherits: false
            }

            @property --tw-inset-ring-shadow {
                syntax: "*";
                inherits: false;
                initial-value: 0 0 #0000
            }

            @property --tw-ring-inset {
                syntax: "*";
                inherits: false
            }

            @property --tw-ring-offset-width {
                syntax: "<length>";
                inherits: false;
                initial-value: 0
            }

            @property --tw-ring-offset-color {
                syntax: "*";
                inherits: false;
                initial-value: #fff
            }

            @property --tw-ring-offset-shadow {
                syntax: "*";
                inherits: false;
                initial-value: 0 0 #0000
            }

            @property --tw-blur {
                syntax: "*";
                inherits: false
            }

            @property --tw-brightness {
                syntax: "*";
                inherits: false
            }

            @property --tw-contrast {
                syntax: "*";
                inherits: false
            }

            @property --tw-grayscale {
                syntax: "*";
                inherits: false
            }

            @property --tw-hue-rotate {
                syntax: "*";
                inherits: false
            }

            @property --tw-invert {
                syntax: "*";
                inherits: false
            }

            @property --tw-opacity {
                syntax: "*";
                inherits: false
            }

            @property --tw-saturate {
                syntax: "*";
                inherits: false
            }

            @property --tw-sepia {
                syntax: "*";
                inherits: false
            }

            @property --tw-drop-shadow {
                syntax: "*";
                inherits: false
            }

            @property --tw-drop-shadow-color {
                syntax: "*";
                inherits: false
            }

            @property --tw-drop-shadow-alpha {
                syntax: "<percentage>";
                inherits: false;
                initial-value: 100%
            }

            @property --tw-drop-shadow-size {
                syntax: "*";
                inherits: false
            }

            @property --tw-duration {
                syntax: "*";
                inherits: false
            }

            @property --tw-ease {
                syntax: "*";
                inherits: false
            }

            @property --tw-content {
                syntax: "*";
                inherits: false;
                initial-value: ""
            }

            @keyframes spin {
                to {
                    transform: rotate(360deg)
                }
            }

            @keyframes ping {

                75%,
                to {
                    opacity: 0;
                    transform: scale(2)
                }
            }

            @keyframes pulse {
                50% {
                    opacity: .5
                }
            }

            @keyframes bounce {

                0%,
                to {
                    animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                    transform: translateY(-25%)
                }

                50% {
                    animation-timing-function: cubic-bezier(0, 0, .2, 1);
                    transform: none
                }
            }
        </style>
    @endif
</head>

<body
    class="bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col overflow-x-hidden">
    <!-- Navbar -->
    <header class="w-full text-sm mb-6 not-has-[nav]:hidden sticky lg:fixed top-0 p-6 bg-inherit z-30">
        @if (Route::has('login'))
            <nav class="flex items-center justify-between mx-auto gap-4 lg:max-w-4xl">
                <a href="#" class="font-mono font-bold text-3xl text-white">TRCKR</a>
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border  border-[#3E3E3A] hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border  border-[#3E3E3A] hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </nav>
        @endif
    </header>

    <!-- Hero -->
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex w-full flex-col">
            <div class="flex flex-col lg:flex-row gap-4 h-screen text-white lg:justify-center">
                <div class="w-full flex flex-col gap-6 lg:my-auto items-center delay-[100ms] duration-[600ms] taos:translate-y-[-20%] taos:opacity-0"
                    data-taos-offset="500"">
                    <h1 class=" text-5xl">Free Expense Tracker</h1>
                    <h2 class="text-lg text-center w-1/2">Track daily spending, budgets and investments in one place.
                        Create categories
                        for your needs and see
                        where all the money goes.</h2>


                    @auth
                        <a href="{{route('dashboard')}}"
                            class="bg-transparent hover:bg-[#0a0a0a] text-white font-semibold py-2 px-4 border border-white hover:border-[#62605b] rounded max-w-56">Start
                            tracking for Free</a>
                    @else

                        <a href="{{route('register')}}"
                            class="bg-transparen text-white font-semibold py-2 px-4 border border-white hover:border-[#62605b] rounded max-w-56">
                            <div class="flex gap-1">
                                <p>Start
                                    tracking for Free</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                            </div>
                        </a>
                    @endauth
                </div>
                <div class="relative w-full">
                    <img src="{{ asset('Images/macbook.png') }}"
                        class="absolute z-10 right-[-10%] w-[100%] lg:top-1/2 lg:-translate-y-1/2 delay-[500ms] duration-[600ms] taos:translate-x-[100%] taos:opacity-0"
                        data-taos-offset="400"">
                    <img src=" {{ asset('Images/phone.png') }}"
                        class="absolute z-20 left-[-20%] w-[100%] lg:top-1/2 lg:-translate-y-1/2 delay-[300ms] duration-[600ms] taos:translate-x-[100%] taos:opacity-0"
                        data-taos-offset="400"">

                </div>
            </div>
            <!-- Three Cards -->
            <div class=" flex justify-center duration-[600ms] taos:translate-y-[100%] taos:opacity-0"
                        data-taos-offset="100"">
                    <div class=" flex flex-col gap-4 justify-center lg:flex lg:flex-row">
                    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
                        <div class=" p-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-20 text-green-300 mb-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                            </svg>
                            <h5 class="mb-2 text-slate-800 text-xl font-bold">
                                Have perfect control
                            </h5>
                            <p class="text-slate-600 leading-normal font-light">
                                over all your cash expenses and online transactions.
                            </p>
                        </div>
                    </div>

                    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96
">
                        <div class=" p-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-20 text-pink-600 mb-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                            </svg>

                            <h5 class="mb-2 text-slate-800 text-xl font-bold">
                                Get a quick overview
                            </h5>
                            <p class="text-slate-600 leading-normal font-light">
                                about your expenses at a glance in one place.
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
                        <div class=" p-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-20 text-blue-500 mb-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>

                            <h5 class="mb-2 text-slate-800 text-xl font-bold">
                                Use our smart budgets
                            </h5>
                            <p class="text-slate-600 leading-normal font-light">
                                to save money for a new car, dreamy vacation or top university.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 w-10/12 mx-auto">
                <!-- Card 1 -->
                <div
                    class="bg-neutral-primary-soft flex flex-col items-center lg:flex-row w-full p-6 rounded-base shadow-xs mt-52">
                    <div class="w-1/2 text-white pb-5 lg:pb-0 delay-[100ms] duration-[500ms] taos:translate-x-[-100%] taos:opacity-0"
                        data-taos-offset="400"">
                <h5 class=" mb-3 text-4xl font-semibold tracking-tight text-heading leading-8 text-white pb-6">Track
                        your
                        cash flow</h5>
                        <p class="text-body mb-6 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 text-green-400 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            Create an account and start tracking where your money goes free of charge.
                        </p>
                        <p class="text-body mb-6 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 text-green-400 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            Track your expenses manually.
                        </p>
                    </div>
                    <div class="w-1/2">
                        {{-- Statistics --}}
                        <div class="flex flex-col gap-2">
                            <div class="rounded-xl bg-transparent p-6 shadow-sm ring-1 ring-gray-200 delay-[150ms] duration-[600ms] taos:translate-y-[-100%] taos:opacity-0"
                                data-taos-offset="400"">
                        <p class=" text-sm font-medium text-gray-500">
                                Total Spent
                                </p>

                                <p class="mt-2 text-3xl font-bold text-white">
                                    €256
                                </p>

                                <p class="mt-2 text-xs text-gray-500">
                                    This month
                                </p>
                            </div>

                            <div class="rounded-xl bg-transparent p-6 shadow-sm ring-1 ring-gray-200 delay-[200ms] duration-[600ms] taos:translate-y-[-100%] taos:opacity-0"
                                data-taos-offset="300"">
                        <p class=" text-sm font-medium text-gray-500">
                                Expenses
                                </p>

                                <p class="mt-2 text-3xl font-bold text-white">
                                    11
                                </p>

                                <p class="mt-2 text-xs text-gray-500">
                                    This month
                                </p>
                            </div>

                            <div class="rounded-xl bg-transparent p-6 shadow-sm ring-1 ring-gray-200 delay-[250ms] duration-[600ms] taos:translate-y-[-100%] taos:opacity-0"
                                data-taos-offset="200"">
                        <p class=" text-sm font-medium text-gray-500">
                                Average Expense
                                </p>

                                <p class="mt-2 text-3xl font-bold text-white">
                                    €22
                                </p>

                                <p class="mt-2 text-xs text-gray-500">
                                    This month
                                </p>
                            </div>

                            <div class="rounded-xl bg-transparent p-6 shadow-sm ring-1 ring-gray-200 delay-[300ms] duration-[600ms] taos:translate-y-[-100%] taos:opacity-0"
                                data-taos-offset="100"">

                        <p class=" text-sm font-medium text-gray-500">
                                Budget Remaining
                                </p>
                                <p class="mt-2 text-3xl font-bold text-green-600">
                                    €24
                                </p>

                                <p class="mt-2 text-xs text-gray-500">
                                    This month
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="bg-neutral-primary-soft flex flex-col items-center lg:flex-row-reverse w-full p-6 rounded-base shadow-xs mt-52">
                    <div class="w-1/2 text-white pb-5 lg:pb-0 delay-[100ms] duration-[500ms] taos:translate-x-[100%] taos:opacity-0"
                        data-taos-offset="400"">
                <h5 class=" mb-3 text-4xl font-semibold tracking-tight text-heading leading-8 text-white pb-6">
                        Understand your financial habits</h5>
                        <p class="text-body mb-6 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 text-green-400 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            Analyze your finance with beautiful, simple and easy to understand graphic. No need for
                            complicated
                            Excel sheets.
                        </p>
                        <p class="text-body mb-6 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 text-green-400 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            See where your money goes and where they come from every month.
                        </p>
                    </div>
                    <div class="w-1/2">
                        {{-- Chart --}}
                        <div class="flex flex-col gap-2">
                            <div class="mx-auto" id="chart-wrapper">
                                <canvas id="doughnutChartMock"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="bg-neutral-primary-soft flex flex-col items-center lg:flex-row w-full p-6 rounded-base shadow-xs mt-52">
                    <div
                        class="w-1/2 text-white pb-5 lg:pb-0 delay-[100ms] duration-[500ms] taos:translate-x-[-100%] taos:opacity-0">
                        <h5 class="mb-3 text-4xl font-semibold tracking-tight text-heading leading-8 text-white pb-6">
                            Make your
                            spending stress–free</h5>
                        <p class="text-body mb-6 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 text-green-400 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            Know how much you can spend in order to stick to your budget.
                        </p>
                        <p class="text-body mb-6 flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-4 text-green-400 shrink-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                            Save money for your future dreams.
                        </p>
                    </div>
                    <div class="w-1/2 duration-[600ms] taos:translate-y-[100%] taos:opacity-0" data-taos-offset="100"">
                {{-- Statistics --}}
                <div class=" py-8">
                        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">

                            {{-- Main card --}}
                            <div class="overflow-hidden rounded-xl bg-transparent shadow-sm ring-1 ring-gray-200">

                                {{-- Header --}}
                                <div class="border-b border-gray-200 px-6 py-5">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <p class="text-sm text-gray-500">
                                                Overall Budget
                                            </p>

                                            <h3 class="mt-1 text-2xl font-bold text-white">
                                                August 2026
                                            </h3>
                                        </div>

                                        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">

                                            {{-- Budget --}}
                                            <div class="rounded-lg bg-transparent p-4">
                                                <p class="text-sm font-medium text-gray-500">
                                                    Budget
                                                </p>

                                                <p class="mt-1 text-2xl font-bold text-white">
                                                    €170.00
                                                </p>
                                            </div>

                                            {{-- Spent --}}
                                            <div class="rounded-lg bg-transparent p-4">
                                                <p class="text-sm font-medium text-gray-500">
                                                    Spent
                                                </p>

                                                <p class="mt-1 text-2xl font-bold text-white">
                                                    €160.00
                                                </p>
                                            </div>

                                            {{-- Remaining --}}
                                            <div class="rounded-lg bg-transparent p-4">
                                                <p class="text-sm font-medium text-gray-500">
                                                    Remaining
                                                </p>

                                                <p class="mt-1 text-2xl font-bold  text-green-600">
                                                    €10.00
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                {{-- Budget information --}}
                                <div class="divide-y divide-gray-200">

                                    {{-- Category --}}
                                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                                        <div class="text-sm font-medium text-gray-500">
                                            Category
                                        </div>

                                        <div class="text-sm text-white sm:col-span-2">

                                            <span
                                                class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-700">
                                                All Categories
                                            </span>
                                        </div>
                                    </div>

                                    {{-- Month --}}
                                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                                        <div class="text-sm font-medium text-gray-500">
                                            Month
                                        </div>

                                        <div class="text-sm text-white sm:col-span-2">
                                            August
                                        </div>
                                    </div>

                                    {{-- Year --}}
                                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                                        <div class="text-sm font-medium text-gray-500">
                                            Year
                                        </div>

                                        <div class="text-sm text-white sm:col-span-2">
                                            2026
                                        </div>
                                    </div>

                                    {{-- Budget amount --}}
                                    <div class="grid grid-cols-1 gap-2 px-6 py-4 sm:grid-cols-3">
                                        <div class="text-sm font-medium text-gray-500">
                                            Budget Amount
                                        </div>

                                        <div class="text-sm font-semibold text-white sm:col-span-2">

                                            €170.00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="self-center mt-32 mb-32 flex flex-col gap-5">
        <h1 class="text-4xl font-semibold tracking-tight text-heading leading-8 text-white">Begin treading the path
            to financial freedom</h1>
        <a href="{{route('register')}}"
            class="bg-transparent text-white font-semibold py-2 px-4 border border-white hover:border-[#62605b] rounded max-w-56 self-center">
                Join now
        </a>
    </div>
    </main>
    </div>

    <!-- FOOTER -->
    <footer class="bg-[#0a0a0a] text-white pt-10">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">

                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div class="px-12">
                        <ul class="text-body font-medium text-sm">
                            <li class="mb-4">
                                <a href="#">FAQ</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Account</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Ways to Watch</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Privacy</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Legal Notices</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-28">
                        <ul class="text-body font-medium text-sm">
                            <li class="mb-4">
                                <a href="#">Help Center</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Media Center</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Jobs</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Terms of Use</a>
                            </li>
                            <li class="mb-4">
                                <a href="#">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sm:flex sm:items-center sm:justify-between py-4">
                <span class="text-sm text-body sm:text-center">© 2026 <a href="https://github.com/CDGabriel"
                        class="hover:underline">CDGabriel™</a>. No Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-body hover:text-heading">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>