export const socialMediaLinks = {
  linkedin: 'https://www.linkedin.com/in/michael-patrick-escalambre-b8ab91237/',
  facebook: 'https://www.facebook.com/michaelpatrick.reyes',
  github: 'https://github.com/kiroVal',
};

// Function to open links in a new tab
function openLinkInNewTab(link) {
  window.open(link, '_blank');
}

class Person {
  constructor(name, role) {
    this.name = name;
    this.role = role;
  }

  introduce() {
    console.log(`Hello, I'm ${this.name}, a ${this.role}.`);
  }
}

async function fetchData(url) {
  try {
    const response = await fetch(url);
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.error('Error fetching data:', error);
  }
}

function updatePageTitle() {
  document.title = 'Michael Patrick Escalambre - Personal Website';
}

function toggleMenu() {
  const menu = document.querySelector('.menu-links');
  const icon = document.querySelector('.hamburger-icon');
  menu.classList.toggle('open');
  icon.classList.toggle('open');
}

const pat = new Person('Michael Patrick Escalambre', 'Student Programmer');
pat.introduce();

openLinkInNewTab(socialMediaLinks.linkedin);
fetchData('https://api.example.com/data');
updatePageTitle();
