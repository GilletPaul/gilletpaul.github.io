var golds;
var gps;
var x;
var click;

setInterval(function() {
  displayGolds();
  displayGPS();
  golds+=gps;
}, 1000);
var data = localStorage.getItem('data')
if (data) {
  data = JSON.parse(data)
  golds = data.golds;
  gps = data.gps;
  x = data.x;
  click = data.click;
  minions = JSON.parse(data.minions);
} else {
  golds = 0;
  gps = 0;
  x = 1;
  click = 0;
  minions = [
    { id: 1, name: "Slime", cost: 10, gps: 0.1, owned: 0 },
    { id: 2, name: "Undead", cost: 100, gps: 1, owned: 0 },
    { id: 3, name: "Imp", cost: 500, gps: 5, owned: 0 }
  ];
  save()
}

function addGold(x) {
  golds+=x;
  displayGolds();
  save();
}

function displayGPS() {
  document.getElementById("g").innerHTML = (Math.round(100 * gps) / 100).toString();
}

function displayGolds() {
  document.getElementById("p").innerHTML = (Math.round(100 * golds) / 100).toString();
}

function getGPS() {
  minions.forEach(element => gps+=(element.gps * element.owned));
}

function buyMinion(id) {
  var minionbuy = minions.find(buying => buying.id == id)
  if ( minionbuy.cost <= golds ) {
    gps += minionbuy.gps; 
    minionbuy.owned++;
    golds -= minionbuy.cost;
    minionbuy.cost *=1.15
    if (minionbuy.owned == 25 || minionbuy.owned == 50 || minionbuy.owned == 100 || minionbuy.owned == 250 || minionbuy.owned == 1000) {
			minionbuy.gps *= 2;
			getGPS();
    }
    click++;
    if (click == 50) {
      click = 0;
      x *= 2;
    }
  }
  displayCost(id)
  save();
}

function save() {
	localStorage.setItem('data', JSON.stringify({golds, gps, x, click, minions: JSON.stringify(minions)}))
}

function displayCost(id) {
  document.getElementById("cost" + id).innerHTML = (Math.round(100 * minions.find(displayc => displayc.id == id).cost) / 100).toString();
}

function displayMGPS(id) {
  document.getElementById("gps" + id).innerHTML = (Math.round(100 * minions.find(displayg => displayg.id == id).gps) / 100).toString();
}