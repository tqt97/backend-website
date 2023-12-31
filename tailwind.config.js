import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            animation: {
                gradient: "animatedgradient 6s ease infinite alternate",
                texSlide:
                    "text-slide 12.5s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                "text-slide-2":
                    "text-slide-2 5s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                "text-slide-3":
                    "text-slide-3 7.5s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                "text-slide-4":
                    "text-slide-4 10s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                "text-slide-5":
                    "text-slide-5 12.5s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                "text-slide-6":
                    "text-slide-6 15s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                "text-slide-7":
                    "text-slide-7 17.5s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                "text-slide-8":
                    "text-slide-8 20s cubic-bezier(0.83, 0, 0.17, 1) infinite",
                typing: "typing 5s steps(20) infinite alternate, blink .7s infinite",
            },
            keyframes: {
                bounceSlow: {
                    "0%, 100%": {
                        transform: "translateY(-5%)",
                        animationTimingFunction: "cubic-bezier(0.8,0,1,1)",
                    },
                    "50%": {
                        transform: "translateY(5%)",
                        animationTimingFunction: "cubic-bezier(0,0,0.2,1)",
                    },
                },
                animatedgradient: {
                    "0%": { backgroundPosition: "0% 50%" },
                    "50%": { backgroundPosition: "100% 50%" },
                    "100%": { backgroundPosition: "0% 50%" },
                },
                textSlide: {
                    "0%, 16%": {
                        transform: "translateY(0%)",
                    },
                    "20%, 36%": {
                        transform: "translateY(-16.66%)",
                    },
                    "40%, 56%": {
                        transform: "translateY(-33.33%)",
                    },
                    "60%, 76%": {
                        transform: "translateY(-50%)",
                    },
                    "80%, 96%": {
                        transform: "translateY(-66.66%)",
                    },
                    "100%": {
                        transform: "translateY(-83.33%)",
                    },
                },
                "text-slide-2": {
                    "0%, 40%": {
                        transform: "translateY(0%)",
                    },
                    "50%, 90%": {
                        transform: "translateY(-33.33%)",
                    },
                    "100%": {
                        transform: "translateY(-66.66%)",
                    },
                },
                "text-slide-3": {
                    "0%, 26.66%": {
                        transform: "translateY(0%)",
                    },
                    "33.33%, 60%": {
                        transform: "translateY(-25%)",
                    },
                    "66.66%, 93.33%": {
                        transform: "translateY(-50%)",
                    },
                    "100%": {
                        transform: "translateY(-75%)",
                    },
                },
                "text-slide-4": {
                    "0%, 20%": {
                        transform: "translateY(0%)",
                    },
                    "25%, 45%": {
                        transform: "translateY(-20%)",
                    },
                    "50%, 70%": {
                        transform: "translateY(-40%)",
                    },
                    "75%, 95%": {
                        transform: "translateY(-60%)",
                    },
                    "100%": {
                        transform: "translateY(-80%)",
                    },
                },
                "text-slide-5": {
                    "0%, 16%": {
                        transform: "translateY(0%)",
                    },
                    "20%, 36%": {
                        transform: "translateY(-16.66%)",
                    },
                    "40%, 56%": {
                        transform: "translateY(-33.33%)",
                    },
                    "60%, 76%": {
                        transform: "translateY(-50%)",
                    },
                    "80%, 96%": {
                        transform: "translateY(-66.66%)",
                    },
                    "100%": {
                        transform: "translateY(-83.33%)",
                    },
                },
                "text-slide-6": {
                    "0%, 13.33%": {
                        transform: "translateY(0%)",
                    },
                    "16.66%, 30%": {
                        transform: "translateY(-14.28%)",
                    },
                    "33.33%, 46.66%": {
                        transform: "translateY(-28.57%)",
                    },
                    "50%, 63.33%": {
                        transform: "translateY(-42.85%)",
                    },
                    "66.66%, 80%": {
                        transform: "translateY(-57.14%)",
                    },
                    "83.33%, 96.66%": {
                        transform: "translateY(-71.42%)",
                    },
                    "100%": {
                        transform: "translateY(-85.71%)",
                    },
                },
                "text-slide-7": {
                    "0%, 11.43%": {
                        transform: "translateY(0%)",
                    },
                    "14.28%, 25.71%": {
                        transform: "translateY(-12.5%)",
                    },
                    "28.57%, 40%": {
                        transform: "translateY(-25%)",
                    },
                    "42.85%, 54.28%": {
                        transform: "translateY(-37.5%)",
                    },
                    "57.14%, 68.57%": {
                        transform: "translateY(-50%)",
                    },
                    "71.42%, 82.85%": {
                        transform: "translateY(-62.5%)",
                    },
                    "85.71%, 97.14%": {
                        transform: "translateY(-75%)",
                    },
                    "100%": {
                        transform: "translateY(-87.5%)",
                    },
                },
                "text-slide-8": {
                    "0%, 10%": {
                        transform: "translateY(0%)",
                    },
                    "12.5%, 22.5%": {
                        transform: "translateY(-11.11%)",
                    },
                    "25%, 35%": {
                        transform: "translateY(-22.22%)",
                    },
                    "37.5%, 47.5%": {
                        transform: "translateY(-33.33%)",
                    },
                    "50%, 60%": {
                        transform: "translateY(-44.44%)",
                    },
                    "62.5%, 72.5%": {
                        transform: "translateY(-55.55%)",
                    },
                    "75%, 85%": {
                        transform: "translateY(-66.66%)",
                    },
                    "87.5%, 97.5%": {
                        transform: "translateY(-77.77%)",
                    },
                    "100%": {
                        transform: "translateY(-88.88%)",
                    },
                },
                typing: {
                    "0%": {
                        width: "0%",
                        visibility: "hidden",
                    },
                    "100%": {
                        width: "100%",
                    },
                },
                blink: {
                    "50%": {
                        borderColor: "transparent",
                    },
                    "100%": {
                        borderColor: "white",
                    },
                },
            },

            backgroundSize: {
                "300%": "300%",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                lobster: ['"Lobster"', ...defaultTheme.fontFamily.sans],
                outfit: ['"outfit"', ...defaultTheme.fontFamily.sans],
                body: ["Inter", "ui-sans-serif", "system-ui"],
            },
        },
    },

    plugins: [forms, typography],
};
