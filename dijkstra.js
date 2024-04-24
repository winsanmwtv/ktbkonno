//Code from: https://gist.github.com/MoeweX/ab98efee9435b47529e3a6cb50c5b605

//modified by muffinbarde

const closedlines = ["M3-1","M3-2","M3-3","M3-4"];
//M3-1: Ganters Hill <-> Sergels Square
//M3-2: Sergeld Square <-> Harlonian Plaza
//M3-3: Harlonian Plaza <-> National Mall
//M3-4: National Mall <-> Lighthouse Point

const problem = {
    AG6: {F006: 1}, //Bang Bon
    F006: {AG6: 1000, F025: 18, F055: 85},
  
    AG8: {A008: 1}, //Bang O
    A008: {AG8: 1000, A010: 15, A062: 25},
  
    AG9: {A009: 1}, //Bang Phai
    A009: {AG9: 1000, A064: 30, A044: 20},
  
    AG10: {A010: 1}, //Bang Pho
    A010: {AG10: 1000, A013: 45, A008: 15},
  
    AG12: {A012: 1}, //Bang Son
    A012: {AG12: 1000, A014: 15, A036: 60}, //M1

    AG13: {A013: 1}, //Bang Sue Grand
    A013: {AG13: 1000, A056: 60, A010: 45}, //M1
  
    AG14: {A014: 1}, //Bang Wa
    A014: {AG14: 1000, A012: 15, A064: 45}, //M1
  
    AG17: {A017: 1}, //Chong Nonsri
    A017: {AG17: 1000, A036: 22, A055: 15}, //M1
  
    AG25: {F025: 1}, //Embassy of America
    F025: {AG17: 1000, F062: 25, F006: 18}, //M9
  
    AG36: {A036: 1}, //Iconsiam
    A036: {AG36: 1000, A012: 60, A017: 22}, //M1
  
    AG44: {A044: 1}, //Khlong Bang Phai
    A044: {AG44: 1000, A059: 30, A009: 20}, //M1
  
    AG55: {A055: 1, F055: 1}, //Memorial Park
    A055: {AG55: 1000, A017: 15, A013: 60}, //M1
    F055: {AG55: 1000, F006: 85}, //M9
  
    AG59: {A059: 1}, //OP Headquarters
    A059: {AG59: 1000, A062: 30, A044: 30}, //M1
  
    AG62: {A062: 1, F062: 1}, //Sai Mai
    A062: {AG62: 1000, A008: 25, A059: 30}, //M1
    F062: {AG62: 1000, F025: 25}, //M9

    AG64: {A064: 1}, //Saphan Taksin
    A064: {AG64: 1000, A009: 30, A014: 45}, //M1
};

function log(message) {
    const logging = false;
    if (logging) {
        console.log(message);
    }
}

const lowestCostNode = (costs, processed) => {
    return Object.keys(costs).reduce((lowest, node) => {
        if (lowest === null || costs[node] < costs[lowest]) {
            if (!processed.includes(node)) {
                lowest = node;
            }
        }
        return lowest;
    }, null);
};

// function that returns the minimum cost and path to reach Finish
const dijkstra = (graph, startNodeName, endNodeName) => {

    // track the lowest cost to reach each node
    let costs = {};
    costs[endNodeName] = "Infinity";
    costs = Object.assign(costs, graph[startNodeName]);

    // track paths
    const parents = {endNodeName: null};
    for (let child in graph[startNodeName]) {
        parents[child] = startNodeName;
    }

    // track nodes that have already been processed
    const processed = [];

    let node = lowestCostNode(costs, processed);

    while (node) {
        let cost = costs[node];
        let children = graph[node];
        for (let n in children) {
            if (String(n) === String(startNodeName)) {
                log("WE DON'T GO BACK TO START");
            } else {
                log("StartNodeName: " + startNodeName);
                log("Evaluating cost to node " + n + " (looking from node " + node + ")");
                log("Last Cost: " + costs[n]);
                let newCost = cost + children[n] + 20;
                log("New Cost: " + newCost);
                if (!costs[n] || costs[n] > newCost) {
                    costs[n] = newCost;
                    parents[n] = node;
                    log("Updated cost und parents");
                } else {
                    log("A shorter path already exists");
                }
            }
        }
        processed.push(node);
        node = lowestCostNode(costs, processed);
    }

    let optimalPath = [endNodeName];
    let parent = parents[endNodeName];
    while (parent) {
        optimalPath.push(parent);
        parent = parents[parent];
    }
    optimalPath.reverse();

    const results = {
        distance: costs[endNodeName],
        path: optimalPath
    };

    return results;
};

console.log(dijkstra(problem, dijkstra_phppass_dep, dijkstra_phppass_dest)); //PHP PASS!!!


dijkstra_final = dijkstra(problem, dijkstra_phppass_dep, dijkstra_phppass_dest);


given_seconds = dijkstra_final.distance - 1041;

hours = Math.floor(given_seconds / 3600);
minutes = Math.floor((given_seconds - (hours * 3600)) / 60);
seconds = given_seconds - (hours * 3600) - (minutes * 60);

let dijkstra_passjs_distance = minutes.toString() + ' minutes and ' + seconds.toString() + ' seconds';



let dijkstra_passjs_path = dijkstra_final.path;
let dijkstra_passjs_path_readable = [];
let dijkstra_passjs_path_readable_plaintext = "";


const stationnames = [
                       "🚏 Abydos School (South Gate)", 
                       "🚏 Abydos School (West Gate)", 
                       "🚉 Brentwood", 
                       "🚉 Brentwood Pier", 
                       "🚉 Chitose", 
                       "🚏 Embassy of Buryland United", 
                       "🚉 Epping", 
                       "🚉 Faculty of Railway Engineering", 
                       "🚏 Filius Cathedral", 
                       "🚏 Filius Railway Station", 
                       "🚏 Filius Theatre", 
                       "🚏 Golconde Bridge", 
                       "🚉 Gojo", 
                       "🚉 Hokuyo", 
                       "🚉 Kimitsu", 
                       "🚉 Kimitsu-Minato", 
                       "🚉 Katsuragi", 
                       "🚉 Konno University (Faculty of DIT)", 
                       "🚉 Maekawa", 
                       "🚉 Maruyama", 
                       "🚏 Midori Express HQ", 
                       "🚏 Midori Food Centre", 
                       "🚏 Misono Hospital", 
                       "🚉 Mizuna", 
                       "🚉 Mizuno Filius", 
                       "🚏 Momoi Time Center", 
                       "🚉 DORASAN CHECKPOINT (Buryland)", 
                       "🚏 Perorozilla View Point", 
                       "🚉 Shinden", 
                       "🚉 Taura", 
                       "🚉 Twyford International", 
                       "🚉 Twyford-upon-Thaime",
                       "🚏 Lunatic Eye",
                       "🚏 Minseo Park (North)",
                       "🚏 Minseo Park (South)",
                       "🚉 KNU Council",
                       "🚏 Peroro Flower Shop",
                       "🚉 Otaki",
                       "🚉 Minagi",
                       "🚉 Kotoha Checkpoint",
                       "🚉 SURANARAI (Buryland)",
                       "🚉 HIMANOS DAM (Buryland)",
                       "🚉 LHOKUSON SELATAN (Buryland)",
                       "🚉 LHOKUSON (Buryland)",
                       "🚉 BANDAR BARU SELATAN (Buryland)",
                       "🚉 MAHA NAKHON CENTRAL TERMINAL (Buryland)"];

const sym_b = '&nbsp;<div class="tooltip"><img src="barrierfree.png" width="20px"><span class="tooltiptext tooltip-right">Without Ticket Barrier</span></div>';
const sym_a = '&nbsp;<div class="tooltip"><img src="no_wheelchair.png" width="20px"><span class="tooltiptext tooltip-right">No Barrier-free Access</span></div>';
const sym_ab = sym_b + sym_a;
const stationsymbcom = ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
const stationsymbmet = ["","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""];
const stationsymbbus = ["","","","","","&nbsp;Station","","","","&nbsp;Station","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",""];

const defination_com = ['A','a','B'];
const defination_metro = ['C','D','E','F','G'];
const defination_bus = ['H','I','J'];

const linenames = [];
linenames["A"] = "<div class='tooltip'><img src='OP_Ride.png' width='24px'><span class='tooltiptext tooltip-right'>OP Ride</span></div><img src='M1.png' class='w3-round' style='background-color:#1F56E7' width='24px'> Line 1 Circle Line";

linenames["B"] = "<div class='tooltip'><img src='TMGT_Railway.png' width='24px'><span class='tooltiptext tooltip-right'>Tae Mobile Skytrain Coompany</span></div><img src='M2.png' class='w3-round' style='background-color:#1FFF3A' width='24px'> Line 2 Bang Wa Line";

linenames["C"] = "<div class='tooltip'><img src='JKRail.png' width='24px'><span class='tooltiptext tooltip-right'>JKRail</span></div><img src='M3.png' class='w3-round' style='background-color:#12E5E8' width='24px'> Line 3 Central Line";

linenames["D"] = "<div class='tooltip'><img src='Connect_Railway.png' width='24px'><span class='tooltiptext tooltip-right'>ConnectRailway</span></div><img src='M4.png' class='w3-round' style='background-color:#9B32EE' width='24px'> Line 4 Bandar Line";

linenames["E"] = "<div class='tooltip'><img src='WITALAND_CENTRAL_METRO.png' width='24px'><span class='tooltiptext tooltip-right'>Witaland Central Metro</span></div><img src='M5.png' class='w3-round' style='background-color:#FDEA24' width='24px'> Line 5 Eastern Line";

linenames["F"] = "<div class='tooltip'><img src='TMGT_Railway.png' width='24px'><span class='tooltiptext tooltip-right'>Tae Mobile Skytrain Company</span></div><img src='M6.png' class='w3-round' style='background-color:#19CB81' width='24px'> Line 6 East-West Line";

linenames["G"] = "<div class='tooltip'><img src='WitalandMetroInverted.png' width='24px'><span class='tooltiptext tooltip-right'>N/A</span></div><img src='Mee.png' class='w3-round' style='background-color:#C50011' width='24px'> Metro M31 <div class='tooltip'><img src='manual_service.png' width='24px'><span class='tooltiptext tooltip-right'>Line M31 is driver operated and thus has an irregular service.</span></div>";

linenames["H"] = "<div class='tooltip'><img src='WITALAND_CENTRAL_METRO.png' width='24px'><span class='tooltiptext tooltip-right'>Witaland Central Metro</span></div><img src='M7.png' class='w3-round' style='background-color:#E32EF1' width='24px'> Line 7 North-South Line";

linenames["I"] = "<div class='tooltip'><img src='TMGT_Railway.png' width='24px'><span class='tooltiptext tooltip-right'>Tae Mobile Skytrain Company</span></div><img src='M8.png' class='w3-round' style='background-color:#138024' width='24px'> Line 8 Sai Mai Line";

linenames["J"] = "<div class='tooltip'><img src='Connect_Railway.png' width='24px'><span class='tooltiptext tooltip-right'>ConnectRailway</span></div><img src='M9.png' class='w3-round' style='background-color:#A44D14' width='24px'> Line 9 Nokida Line";

linenames["K"] = "<div class='tooltip'><img src='WitalandMetroInverted.png' width='24px'><span class='tooltiptext tooltip-right'>Witaland Central Transit</span></div><img src='Boat.png' width='24px'> Riverboat Service";

linenames["k"] = "<img src='walk.png' width='24px'> Walking between places"

linenames["L"] = "<div class='tooltip'><img src='Apple_Rail_Link.png' width='24px'><span class='tooltiptext tooltip-right'>Phongsiri Railway</span></div><img src='M10.png' class='w3-round' style='background-color:#FF1E88' width='24px'> Line 10 Airport Express";

linenames["M"] = "<div class='tooltip'><img src='Emmaru_Railways.png' width='24px'><span class='tooltiptext tooltip-right'>Emmaru/Entetsu</span></div><img src='M11.png' class='w3-round' style='background-color:#FF2933' width='24px'> Line 11 Northern Line";

linenames["N"] = "<div class='tooltip'><img src='Emmaru_Railways.png' width='24px'><span class='tooltiptext tooltip-right'>Emmaru/Entetsu</span></div><img src='M12.png' class='w3-round' style='background-color:#FF5B1D' width='24px'> Line 12 Western Line";

linenames["O"] = "<div class='tooltip'><img src='Connect_Railway.png' width='24px'><span class='tooltiptext tooltip-right'>ConnectRailway</span></div><img src='M13.png' class='w3-round' style='background-color:#B6E033' width='24px'> Line 13 Yokida Branch line";

linenames["P"] = "<div class='tooltip'><img src='Konno_Transit.png' width='24px'><span class='tooltiptext tooltip-right'>Konno Inc.</span></div><img src='M14.png' class='w3-round' style='background-color:#F7C20F' width='24px'> Line 14 City Express";

linenames["Q"] = "<div class='tooltip'><img src='Beacon_Transit.png' width='24px'><span class='tooltiptext tooltip-right'>Beacon Transit</span></div><img src='M15.png' class='w3-round' style='background-color:#AD0C0C' width='24px'> Line 15 Beacon Island Line";


let currline = "0";
let imgenurl = "<img style='max-width:90%;max-height: 1000px;overflow: auto;' src='imgen.php?data=";

for (let i = 1; i < dijkstra_passjs_path.length-1; i++) {
  let j = dijkstra_passjs_path[i];

  if (j.substr(0, 1) != currline) {
      currline = j.substr(0, 1);

      if (i != 1) {
          dijkstra_passjs_path_readable_plaintext = dijkstra_passjs_path_readable_plaintext + "<br><br><img src='interchange.png' width='24px'> <b>Interchange at " + stationnames[Number(j.substr(j.length - 3))-1] + "</b>";
      }else{
      imgenurl = imgenurl + Number(j.substr(j.length - 3));
      }

      dijkstra_passjs_path_readable_plaintext = dijkstra_passjs_path_readable_plaintext + "<br><br>" + linenames[j.substr(0, 1)];

  } else {
      imgenurl = imgenurl + j.substr(0, 1) + "-" + Number(j.substr(j.length - 3));      
  }

  dijkstra_passjs_path_readable.push(stationnames[Number(j.substr(j.length - 3))-1]);

  m = dijkstra_passjs_path[i+1];

if (dijkstra(problem, dijkstra_phppass_dep, j).distance - 21 < 0) {
    given_seconds = 0;
} else {
    given_seconds = dijkstra(problem, dijkstra_phppass_dep, j).distance - 21;
}

hours = Math.floor(given_seconds / 3600);
minutes = Math.floor((given_seconds - (hours * 3600)) / 60);
seconds = given_seconds - (hours * 3600) - (minutes * 60);

let stationdijkstra = minutes.toString() + ':' + seconds.toString().padStart(2, '0');




  if(m.substr(0, 1) == currline && m.substr(1, 1) != "G") {
    dijkstra_passjs_path_readable_plaintext = dijkstra_passjs_path_readable_plaintext + "<br>├&nbsp;&nbsp;<span style='color:gray'>" + stationdijkstra + "</span>&nbsp;&nbsp;" + stationnames[Number(j.substr(j.length - 3))-1];
  } else {
    dijkstra_passjs_path_readable_plaintext = dijkstra_passjs_path_readable_plaintext + "<br>└&nbsp;&nbsp;<span style='color:gray'>" + stationdijkstra + "</span>&nbsp;&nbsp;" + stationnames[Number(j.substr(j.length - 3))-1];  
  }

  if(defination_com.includes(currline)){
    dijkstra_passjs_path_readable_plaintext = dijkstra_passjs_path_readable_plaintext + stationsymbcom[Number(j.substr(j.length - 3))-1];
  }

  if(defination_metro.includes(currline)){
    dijkstra_passjs_path_readable_plaintext = dijkstra_passjs_path_readable_plaintext + stationsymbmet[Number(j.substr(j.length - 3))-1];
  }

  if(defination_bus.includes(currline)){
    dijkstra_passjs_path_readable_plaintext = dijkstra_passjs_path_readable_plaintext + stationsymbbus[Number(j.substr(j.length - 3))-1];
  }

}

dijkstra_passjs_htprice = '0';




imgenurl = imgenurl + "-'>"