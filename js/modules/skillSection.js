export function skillSection() {
// SKILLS SECTION -----------------------------------------

const row1Logos = [
    {
        logo: "images/software-logo/vscode.svg",
        altText: 'vscode logo'
    },
    {
        logo: "images/software-logo/html-logo.svg",
        altText: 'html logo'
    },
    {
        logo: "images/software-logo/css-logo.svg",
        altText: 'css logo'
    },
    {
        logo: "images/software-logo/js-logo.svg",
        altText: 'javascript logo'
    },
    {
        logo: "images/software-logo/logo-mysql.svg",
        altText: 'mysql logo'
    }
];

const row2Logos = [
    {
        logo: "images/software-logo/new-php-logo.svg",
        altText: 'php logo'
    },
    {
        logo: "images/software-logo/github-mark-white.svg",
        altText: 'github logo'
    },
    {
        logo: "images/software-logo/figma-logo.svg",
        altText: 'figma logo'
    },
    {
        logo: "images/software-logo/Maxon_Cinema_4D_Mark_Primary.svg",
        altText: 'cinema4d logo'
    },
    {
        logo: "images/software-logo/Maxon_Redshift_Mark_Primary.svg",
        altText: 'redshift logo'
    }
];

const row3Logos = [
    {
        logo: "images/software-logo/photoshop-logo.svg",
        altText: 'photoshop logo'
    },
    {
        logo: "images/software-logo/illustrator-logo.svg",
        altText: 'illustrator logo'
    },
    {
        logo: "images/software-logo/aftereffects-logo.svg",
        altText: 'after effects logo'
    }
];

const row1Con = document.querySelector("#icon-row-1");
const row2Con = document.querySelector("#icon-row-2");
const row3Con = document.querySelector("#icon-row-3");

row1Logos.forEach(logoObj => {
    const icon = document.createElement('img');
    icon.src = logoObj.logo;
    icon.alt = logoObj.altText;
    icon.className = 'logo-icon';

    row1Con.appendChild(icon);
});

row2Logos.forEach(logoObj => {
    const icon = document.createElement('img');
    icon.src = logoObj.logo;
    icon.alt = logoObj.altText;
    icon.className = 'logo-icon';

    row2Con.appendChild(icon);
});

row3Logos.forEach(logoObj => {
    const icon = document.createElement('img');
    icon.src = logoObj.logo;
    icon.alt = logoObj.altText;
    icon.className = 'logo-icon';

    row3Con.appendChild(icon);
});
}