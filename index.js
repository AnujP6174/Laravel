// const data = request("./generated.json");
// fetch("./generated.json")
//   .then((response) => {
//     return response.json();
//   })
//   .then((data) => console.log(data));
// var mydata = JSON.parse("generated.json");
// alert(mydata[0].id);
// alert(mydata[0].age);
// alert(mydata[1].name);
// alert(mydata[1].age);

// const jsonData = require("./generated.json");
// console.log(jsonData);

const data = [
  {
    _id: "62c299409bfd0f3133f25771",
    index: 0,
    guid: "b4a921f2-3b7d-4b0a-9fd2-ec56a3dd01bb",
    isActive: false,
    balance: "$2,088.86",
    picture: "http://placehold.it/32x32",
    age: 38,
    eyeColor: "blue",
    name: "Wooten Medina",
    gender: "male",
    company: "AVIT",
    email: "wootenmedina@avit.com",
    phone: "+1 (957) 507-3833",
    address: "821 Ingraham Street, Waterview, New York, 9138",
    about:
      "Occaecat nulla cupidatat sunt labore dolor occaecat proident nulla nulla commodo qui laborum reprehenderit nisi. Velit reprehenderit sint officia quis enim culpa et fugiat. Velit ullamco enim Lorem ex proident proident. Mollit deserunt dolore dolor magna duis pariatur ex deserunt mollit laboris quis irure. Reprehenderit consequat incididunt sit duis nostrud proident velit anim sit id Lorem reprehenderit aliquip.\r\n",
    registered: "2021-09-27T12:32:23 -06:-30",
    latitude: 70.092989,
    longitude: -17.581453,
    tags: [
      "velit",
      "enim",
      "pariatur",
      "amet",
      "consectetur",
      "et",
      "adipisicing",
    ],
    friends: [
      {
        id: 0,
        name: "Cole Lawson",
      },
      {
        id: 1,
        name: "Sherman Jimenez",
      },
      {
        id: 2,
        name: "Elvia Kennedy",
      },
    ],
    greeting: "Hello, Wooten Medina! You have 3 unread messages.",
    favoriteFruit: "apple",
  },
  {
    _id: "62c29940fd76ec67ad1518ed",
    index: 1,
    guid: "dc5c5f39-7290-4f01-92ea-9b926b71d90b",
    isActive: true,
    balance: "$3,456.15",
    picture: "http://placehold.it/32x32",
    age: 25,
    eyeColor: "green",
    name: "Jayne Meyer",
    gender: "female",
    company: "PETIGEMS",
    email: "jaynemeyer@petigems.com",
    phone: "+1 (813) 413-3264",
    address: "387 Throop Avenue, Sattley, Maryland, 359",
    about:
      "Quis incididunt magna ex eu officia ipsum consequat excepteur anim irure ipsum est incididunt enim. Magna enim aliquip adipisicing fugiat fugiat ullamco incididunt irure laborum enim occaecat nisi. Dolor consequat esse laborum amet cillum. Commodo dolore labore magna et laborum quis minim incididunt. Ut culpa adipisicing fugiat fugiat do ipsum nostrud est commodo.\r\n",
    registered: "2014-01-16T08:34:24 -06:-30",
    latitude: 7.976517,
    longitude: -134.701282,
    tags: [
      "anim",
      "veniam",
      "consequat",
      "esse",
      "reprehenderit",
      "pariatur",
      "excepteur",
    ],
    friends: [
      {
        id: 0,
        name: "Becky Hodges",
      },
      {
        id: 1,
        name: "House Sparks",
      },
      {
        id: 2,
        name: "Duran Solis",
      },
    ],
    greeting: "Hello, Jayne Meyer! You have 9 unread messages.",
    favoriteFruit: "strawberry",
  },
  {
    _id: "62c2994069578dd3d2dfed07",
    index: 2,
    guid: "b553818c-1a7c-4d84-9466-d1eaaa055b20",
    isActive: true,
    balance: "$2,739.74",
    picture: "http://placehold.it/32x32",
    age: 34,
    eyeColor: "green",
    name: "Bridges Mercer",
    gender: "male",
    company: "TROLLERY",
    email: "bridgesmercer@trollery.com",
    phone: "+1 (895) 436-2359",
    address: "452 Baltic Street, Rosburg, Oklahoma, 2277",
    about:
      "Duis exercitation nulla commodo anim. Enim veniam laborum enim aute pariatur. Amet aute ex qui esse ipsum labore aliquip veniam. Commodo irure eiusmod aute culpa occaecat officia duis non proident elit minim mollit. Commodo nisi ea Lorem ut consectetur occaecat tempor aliquip occaecat esse.\r\n",
    registered: "2018-06-24T01:15:50 -06:-30",
    latitude: 67.425714,
    longitude: 147.630231,
    tags: ["dolor", "sint", "consequat", "excepteur", "id", "dolore", "ipsum"],
    friends: [
      {
        id: 0,
        name: "Sybil English",
      },
      {
        id: 1,
        name: "Acosta Norman",
      },
      {
        id: 2,
        name: "Helen Nicholson",
      },
    ],
    greeting: "Hello, Bridges Mercer! You have 7 unread messages.",
    favoriteFruit: "banana",
  },
  {
    _id: "62c299403514afcefa60bee5",
    index: 3,
    guid: "8eab93ee-09b2-4afe-9d8d-629f849eac58",
    isActive: false,
    balance: "$1,943.20",
    picture: "http://placehold.it/32x32",
    age: 27,
    eyeColor: "green",
    name: "Roberts Buckley",
    gender: "male",
    company: "FIREWAX",
    email: "robertsbuckley@firewax.com",
    phone: "+1 (820) 482-3265",
    address: "733 Norfolk Street, Siglerville, Virgin Islands, 4445",
    about:
      "Lorem incididunt sint consequat in laborum veniam aliqua eu laboris reprehenderit consectetur laborum ullamco est. Ad Lorem pariatur elit mollit adipisicing anim amet cillum culpa commodo sint mollit nulla. Ullamco minim quis culpa occaecat dolor mollit.\r\n",
    registered: "2020-02-16T08:24:16 -06:-30",
    latitude: 70.5707,
    longitude: 16.482918,
    tags: ["et", "commodo", "excepteur", "eu", "aute", "proident", "do"],
    friends: [
      {
        id: 0,
        name: "Augusta Baker",
      },
      {
        id: 1,
        name: "Bartlett Carney",
      },
      {
        id: 2,
        name: "Vicki Wallace",
      },
    ],
    greeting: "Hello, Roberts Buckley! You have 7 unread messages.",
    favoriteFruit: "apple",
  },
  {
    _id: "62c299408a204b00718cc5a6",
    index: 4,
    guid: "36fb8414-8cc2-456d-9823-b9aa42adf7cf",
    isActive: false,
    balance: "$3,198.75",
    picture: "http://placehold.it/32x32",
    age: 24,
    eyeColor: "blue",
    name: "Mable Clemons",
    gender: "female",
    company: "COLLAIRE",
    email: "mableclemons@collaire.com",
    phone: "+1 (965) 571-2034",
    address: "732 Jodie Court, Blanco, Alaska, 4826",
    about:
      "Adipisicing pariatur eu commodo veniam. Nisi incididunt ut ex dolor ipsum id. Officia enim elit aliqua occaecat. Est tempor duis qui dolor cupidatat eiusmod. Nostrud mollit non voluptate nostrud mollit aute sit enim pariatur adipisicing sit.\r\n",
    registered: "2021-12-04T03:04:01 -06:-30",
    latitude: -56.142664,
    longitude: -23.940468,
    tags: ["laboris", "quis", "aliqua", "nulla", "ipsum", "quis", "incididunt"],
    friends: [
      {
        id: 0,
        name: "Elaine Kirk",
      },
      {
        id: 1,
        name: "Agnes Robles",
      },
      {
        id: 2,
        name: "Alford Callahan",
      },
    ],
    greeting: "Hello, Mable Clemons! You have 7 unread messages.",
    favoriteFruit: "banana",
  },
  {
    _id: "62c2994015d871732d53fd40",
    index: 5,
    guid: "67ba8297-eb06-46b9-ac5a-79353e1ade0f",
    isActive: false,
    balance: "$1,773.69",
    picture: "http://placehold.it/32x32",
    age: 22,
    eyeColor: "brown",
    name: "Dennis Whitney",
    gender: "male",
    company: "CALLFLEX",
    email: "denniswhitney@callflex.com",
    phone: "+1 (853) 525-3659",
    address: "249 Danforth Street, Kraemer, Puerto Rico, 3804",
    about:
      "Sunt laborum incididunt mollit irure ad adipisicing aute. Eiusmod labore ut sit elit Lorem duis. Velit mollit ex Lorem esse cupidatat laborum ipsum pariatur. Aute velit labore dolore labore labore. Velit et esse est proident. Excepteur ad incididunt cupidatat culpa aliqua sint enim voluptate. Ipsum ea veniam qui et ex quis ullamco officia sit proident nulla adipisicing quis quis.\r\n",
    registered: "2014-03-27T08:49:48 -06:-30",
    latitude: -39.443074,
    longitude: -104.34053,
    tags: [
      "proident",
      "dolor",
      "ullamco",
      "labore",
      "mollit",
      "proident",
      "duis",
    ],
    friends: [
      {
        id: 0,
        name: "Weiss Maynard",
      },
      {
        id: 1,
        name: "Riddle Hooper",
      },
      {
        id: 2,
        name: "Hurst Lewis",
      },
    ],
    greeting: "Hello, Dennis Whitney! You have 3 unread messages.",
    favoriteFruit: "banana",
  },
  {
    _id: "62c29940675c98f6ee794aa9",
    index: 6,
    guid: "25bfd9a1-bc00-411c-8dd4-edd3d543b74b",
    isActive: false,
    balance: "$3,564.55",
    picture: "http://placehold.it/32x32",
    age: 27,
    eyeColor: "blue",
    name: "Janet Middleton",
    gender: "female",
    company: "MENBRAIN",
    email: "janetmiddleton@menbrain.com",
    phone: "+1 (885) 549-3246",
    address: "256 Conover Street, Charco, Georgia, 4431",
    about:
      "Cillum nulla ut esse veniam exercitation. Ea voluptate ad eiusmod ea. Nostrud do pariatur enim aliquip. Voluptate eu ut pariatur mollit dolor.\r\n",
    registered: "2020-07-02T09:54:59 -06:-30",
    latitude: -64.456727,
    longitude: 82.771097,
    tags: ["adipisicing", "esse", "enim", "do", "ipsum", "ea", "esse"],
    friends: [
      {
        id: 0,
        name: "Richard Bowers",
      },
      {
        id: 1,
        name: "Dee Hall",
      },
      {
        id: 2,
        name: "Ewing Oliver",
      },
    ],
    greeting: "Hello, Janet Middleton! You have 1 unread messages.",
    favoriteFruit: "apple",
  },
  {
    _id: "62c2994069f8206b3c107bd1",
    index: 7,
    guid: "bd3ce6b2-f894-46a4-8eca-4db994c96922",
    isActive: true,
    balance: "$2,012.51",
    picture: "http://placehold.it/32x32",
    age: 23,
    eyeColor: "brown",
    name: "Stout Holt",
    gender: "male",
    company: "ZENTRY",
    email: "stoutholt@zentry.com",
    phone: "+1 (908) 465-3534",
    address: "650 Kosciusko Street, Westphalia, Connecticut, 7453",
    about:
      "Exercitation sunt id occaecat dolor mollit excepteur. Consequat anim pariatur velit labore incididunt deserunt est aute anim tempor ex incididunt nisi nisi. Aliqua ullamco officia reprehenderit ullamco pariatur commodo sit nisi proident esse commodo. Laboris enim occaecat minim anim consectetur reprehenderit deserunt quis ut eiusmod exercitation qui. Velit aliqua laboris eu officia elit occaecat excepteur deserunt cupidatat ad dolore consequat id et. Cillum eu pariatur quis labore tempor sit sunt enim incididunt tempor.\r\n",
    registered: "2019-04-06T05:56:58 -06:-30",
    latitude: 43.038078,
    longitude: -25.973512,
    tags: [
      "officia",
      "officia",
      "ut",
      "pariatur",
      "culpa",
      "voluptate",
      "culpa",
    ],
    friends: [
      {
        id: 0,
        name: "Solis Russo",
      },
      {
        id: 1,
        name: "Elva Parker",
      },
      {
        id: 2,
        name: "Ila Newton",
      },
    ],
    greeting: "Hello, Stout Holt! You have 4 unread messages.",
    favoriteFruit: "apple",
  },
  {
    _id: "62c2994002aa59f8c4022f43",
    index: 8,
    guid: "2e804392-85fc-44a2-8155-5ce07952ff3b",
    isActive: true,
    balance: "$1,836.14",
    picture: "http://placehold.it/32x32",
    age: 28,
    eyeColor: "blue",
    name: "Mckinney Wong",
    gender: "male",
    company: "BLEEKO",
    email: "mckinneywong@bleeko.com",
    phone: "+1 (910) 567-3419",
    address: "451 Friel Place, Watchtower, Palau, 3592",
    about:
      "Duis officia aute ullamco ullamco ut cupidatat. Reprehenderit labore dolore exercitation sunt reprehenderit cupidatat Lorem occaecat minim nostrud nulla. Ea eu reprehenderit id eu laborum voluptate cupidatat. Amet cillum aliqua ullamco enim proident esse culpa voluptate ut fugiat non nisi Lorem non. Adipisicing nostrud cillum sint dolor consectetur aliqua fugiat sint.\r\n",
    registered: "2017-07-27T08:16:19 -06:-30",
    latitude: -63.988441,
    longitude: -1.011335,
    tags: [
      "ea",
      "voluptate",
      "mollit",
      "exercitation",
      "anim",
      "minim",
      "aute",
    ],
    friends: [
      {
        id: 0,
        name: "Francesca Hebert",
      },
      {
        id: 1,
        name: "Hensley Chaney",
      },
      {
        id: 2,
        name: "Leblanc Cervantes",
      },
    ],
    greeting: "Hello, Mckinney Wong! You have 8 unread messages.",
    favoriteFruit: "apple",
  },
];

const agess = data.filter((anuj) => anuj.age > 25);
// console.log(data[0].friends);
// const finalage = agess.map((some) => {
document.getElementById("age").innerHTML = agess.map(
  (el) => "<br>" + "Name: " + el.name + "<br>" + "Age: " + el.age
);
// });

const gender = data.filter((anuj) => anuj.gender === "male");
document.getElementById("mgender").innerHTML = gender.map(
  (ee) =>
    "<br>" +
    "Name: " +
    ee.name +
    "<br>" +
    "Gender: " +
    ee.gender +
    "<br>" +
    "length of this array is: " +
    gender.length
);

const fgender = data.filter((anuj) => anuj.gender === "female");
document.getElementById("fgender").innerHTML = fgender.map(
  (ele) =>
    "<br>" +
    "Name: " +
    ele.name +
    "<br>" +
    "Gender:" +
    ele.gender +
    "<br>" +
    "length of this array is: " +
    fgender.length
);

// const dolorvar = data.filter((anuj) => anuj.tags == "dolor");
// const mydata = data.filter((anuj) => {
//   if (anuj.tags.find((panchal) => panchal == "dolor")) {
//     console.log(anuj);
//     document.getElementsByClassName("Dolor").innerHTML =
//       "<br>" + "Name: " + anuj.name;
//     for (const key in anuj) {
//       // if (anuj[key] == "name") {
//       //   console.log("hello");
//       // }
//     }
//   }
// });
// console.log(data);

document.getElementById("Dolor").innerHTML = data
  .filter((anuj) => anuj.tags.some((x) => x === "dolor"))
  .map((e) => e.name);

// console.log(mydata);
// mydata.forEach((element) => {
//   document.getElementById("Dolor").mydata;
// });

const salary = data.reduce((total, currentValue) => {
  const temp = currentValue.balance;
  mystring = temp.split("$").join("");
  finalstring = mystring.split(",").join("");
  return total + Number(finalstring);
}, 0);
document.getElementById("balance").innerHTML = salary;

// const friendaccess = data.map((elem) => {
const friend = data.find((num) => num._id == "62c29940fd76ec67ad1518ed");
document.getElementById("Friend").innerHTML = friend.friends.map(
  (patel) => "<br>" + "Name: " + patel.name
);
// return friend;
// });
// const friendaccess = data.filter(
//   (num) => num._id.find() == "62c29940fd76ec67ad1518ed"
// );
// data._id.find("62c29940fd76ec67ad1518ed");
// console.log(friendaccess);
// const friendaccess = data.find("62c29940fd76ec67ad1518ed");
// console.log(friendaccess);
// (num) => num._id == ;
// for (const key in friendaccess) {
//   console.log(friendaccess[key].friends);
// }
let temparray = {};
let newarray = ["a", "b", "a", "c", "d", "a", "b", "c", "d", "e"];
newarray.forEach((eleme) => {
  temparray[eleme] = (temparray[eleme] || 0) + 1;
});
let array = [];
for (const i in temparray) {
  if (temparray[i] === 1) {
    var obj = {};
    obj[i] = temparray[i];
    array.push(obj);
    console.log(i);
  }
}
// console.log(temparray);

let temp = { name: "abc" };
temp.email = "anuj@gmail.com";
console.log(temp);
