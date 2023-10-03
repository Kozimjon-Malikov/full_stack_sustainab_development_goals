// define language reload anchor
let dataReload = document.querySelectorAll("[data-reload]");
// let learnMore = document.querySelector(".learnmore");

// language translations 
let header = {
  // 1
  eng: {
    lang: "Sustainability"
  }, 
  ru: {
    lang: "Устойчивость"
  },
  uz: {
    lang: "Barqarorlik"
  },
}
let mainmenu1 = {
  eng: {
    lang: "Home page"
  }, 
  ru: {
    lang: "Главная страница"
  },
  uz: {
    lang: "Bosh sahifa"
  }
}
let mainmenu2 = {
  eng: {
    lang: "Languages"
  }, 
  ru: {
    lang: "Языки"
  },
  uz: {
    lang: "Tillar"
  }
}
// text page
let language = {
  eng: {
    lang: "17 Sustainable Development Goals: Transforming Our World"
  }, 
  ru: {
    lang: "17 Целей Устойчивого Развития: Преобразование нашего мира"
  },
  uz: {
    lang: "17ta dunyoni o'zgartirishga yo'naltirilgan Barqaror Rivojlanish Maqsadlari"
  }
}
let indexText = {
  eng: {
    lang: "The Sustainable Development Goals, known as the Global Goals as well, are a universal call to action to eradicate poverty, protect the planet, and bring peace and prosperity to all people. The goals were approved by all UN member states, including Uzbekistan, in September 2015. They include 17 goals and 169 targets to be achieved by 2030."
  }, 
  ru: {
    lang: "Цели в области устойчивого развития, иначе известные как Глобальные цели, являются всеобщим призывом к действиям по искоренению нищеты, защите планеты, а также обеспечению мира и процветания для всех людей. Цели были одобрены всеми государствами-членами ООН, включая Узбекистан, в сентябре 2015 года. Они включают 17 целей и 169 задач, которые должны быть достигнуты к 2030 году."
  },
  uz: {
    lang: "Barqaror Rivojlanish Maqsadlari, yoki Global Maqsadlar deb nomlanuvchi qashshoqlikni yo'q qilish, sayyorani himoya qilish va barcha odamlarga tinchlik va farovonlik olib kelishga qaratilgan universal choralardir. Maqsadlar BMTga a'zo barcha davlatlar, shu jumladan, O'zbekiston tomonidan 2015 yil sentyabr oyida ma'qullangan. Ularga 2030 yilga qadar erishilishi kerak bo'lgan 17 ta maqsad va 169 ta maqsad kiritilgan."
  }
}
let jumbotron = {
  eng: {
    lang: "Goals we are supporting through this initiative"
  }, 
  ru: {
    lang: "Цели, которые мы поддерживаем через эту инициативу"
  },
  uz: {
    lang: "Ushbu tashabbus orqali biz qo'llab-quvvatlayotgan"
  }
}
let goals = {
  eng: {
    lang: "Goals"
  }, 
  ru: {
    lang: "Цели"
  },
  uz: {
    lang: "Maqsadlar"
  }
}
let learnMore1 = {
  eng: {
    lang: "Enter"
  }, 
  ru: {
    lang: "Заходите"
  },
  uz: {
    lang: "Kirish"
  }
}
let footerlink = {
  eng: {
    lang: "Useful links"
  }, 
  ru: {
    lang: "Ссылки"
  },
  uz: {
    lang: "Foydali havolalar"
  }
}
let footerContact = {
  eng: {
    lang: "Contact"
  }, 
  ru: {
    lang: "Связаться"
  },
  uz: {
    lang: "Aloqa"
  }
}
let footerMail = {
  eng: {
    lang: "Email"
  }, 
  ru: {
    lang: "Эл. адрес"
  },
  uz: {
    lang: "Elektron pochta"
  }
}
let footerBottom = {
  eng: {
    lang: "Farg'ona politexnika instituti Raqamli ta'lim texnologiyalari markazi - 2022"
  }, 
  ru: {
    lang: "Farg'ona politexnika instituti Raqamli ta'lim texnologiyalari markazi - 2022"
  },
  uz: {
    lang: "Farg'ona politexnika instituti Raqamli ta'lim texnologiyalari markazi - 2022"
  }
}

// define language via window hash
if(window.location.hash) {
  // indextitle
  if(window.location.hash === "#eng") {
    indextitle.textContent = language.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    indextitle.textContent = language.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    indextitle.textContent = language.uz.lang;
  }
  // indextext
  if(window.location.hash === "#eng") {
    indextext.textContent = indexText.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    indextext.textContent = indexText.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    indextext.textContent = indexText.uz.lang;
  }
  // header
  if(window.location.hash === "#eng") {
    indexlogo.textContent = header.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    indexlogo.textContent = header.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    indexlogo.textContent = header.uz.lang;
  }
  // mainmenu1
  if(window.location.hash === "#eng") {
    indexhome.textContent = mainmenu1.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    indexhome.textContent = mainmenu1.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    indexhome.textContent = mainmenu1.uz.lang;
  }
  // mainmenu2
  if(window.location.hash === "#eng") {
    indexlang.textContent = mainmenu2.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    indexlang.textContent = mainmenu2.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    indexlang.textContent = mainmenu2.uz.lang;
  }
  // jumbotron
  if(window.location.hash === "#eng") {
    subtitle.textContent = jumbotron.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    subtitle.textContent = jumbotron.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    subtitle.textContent = jumbotron.uz.lang;
  }
  // goals
  if(window.location.hash === "#eng") {
    titlegoal.textContent = goals.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    titlegoal.textContent = goals.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    titlegoal.textContent = goals.uz.lang;
  }
  // footerlink 
  if(window.location.hash === "#eng") {
    usefullink.textContent = footerlink.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    usefullink.textContent = footerlink.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    usefullink.textContent = footerlink.uz.lang;
  }
  // footercontact 
  if(window.location.hash === "#eng") {
    footercontact.textContent = footerContact.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    footercontact.textContent = footerContact.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    footercontact.textContent = footerContact.uz.lang;
  }
  // 
  if(window.location.hash === "#eng") {
    footermail.textContent = footerMail.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    footermail.textContent = footerMail.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    footermail.textContent = footerMail.uz.lang;
  }
  // footerbottom
  if(window.location.hash === "#eng") {
    footerBottom.textContent = footerbottom.eng.lang;
  }
  else if(window.location.hash === "#ru") {
    footerBottom.textContent = footerbottom.ru.lang;
  }
  else if(window.location.hash === "#uz") {
    footerBottom.textContent = footerbottom.uz.lang;
  }
  // learnmore
  if(window.location.hash === "#eng") {
    learnmore.textContent = learnmore1.eng.lang;
  }
  // else if(window.location.hash === "#ru") {
    // learnMore.textContent = learnmore.ru.lang;
  // }
  // else if(window.location.hash === "#uz") {
    // learnMore.textContent = learnmore.uz.lang;
  // }
}

// define language reload onclick illiteration
// for(i = 0; i <= dataReload.length; i++) {
//   dataReload[i].onclick = function() {
//     location.reload(true);
//   }
// } 