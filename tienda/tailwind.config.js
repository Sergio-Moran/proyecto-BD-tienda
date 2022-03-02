module.exports = {
    prefix: "tw-",
    purge: ["./resources/**/*.blade.php"],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            maxHeight: {
                128: "32rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [require("daisyui")],
};
