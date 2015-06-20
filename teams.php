<?php
function GetTeamIndex($teams, $nom_equipe){
    for ($i = 0 ; $i < count($teams); $i++){
        if ($teams[$i][0]==$nom_equipe){
            return $i;
        }
    }
    return -1;
}
function GetOpponent($teams, $nom_equipe){
    $team_index = GetTeamIndex($teams, $nom_equipe);
    if($team_index%2==0){
        return $teams[$team_index+1][0];
    }
    else return $teams[$team_index-1][0];
}
    $teams = array // 0 - Nom d'équipe, 1 - nom du fichier img, 2 - description
(
    array("St-Louis Blues","blues_dark","The St. Louis Blues are an American professional ice hockey team in St. Louis, Missouri. They are members of the Central Division of the Western Conference of the National Hockey League (NHL). The team is named after the famous W. C. Handy song Saint Louis Blues, and plays in the 19,150-seat Scottrade Center in downtown St. Louis. The franchise was founded in 1967 as an expansion team during the league's original expansion from six to 12 teams. The Blues are the oldest NHL team never to have won the Stanley Cup."),
    array("Minnesota Wild","wild","The Minnesota Wild is an American professional ice hockey team based in St. Paul, Minnesota, United States. They are members of the Central Division of the Western Conference of the National Hockey League (NHL).[1] The Wild are the only one of the Minneapolis-St. Paul area's major professional sports league franchises to play in St. Paul; the other three play in Minneapolis."),
    array("Nashville Predators","predators","The Nashville Predators are a professional ice hockey team based in Nashville, Tennessee. They are members of the Central Division of the Western Conference of the National Hockey League (NHL)."),
    array("Chicago Blackhawks","blackhawks","DescriptionThe Chicago Blackhawks (spelled as Black Hawks before 1986, and known colloquially as the Hawks) are a professional ice hockey team based in Chicago, Illinois. They are members of the Central Division of the Western Conference of the National Hockey League (NHL). They have won six Stanley Cup championships since their founding in 1926. The Blackhawks are one of the Original Six NHL teams along with the Detroit Red Wings, Montreal Canadiens, Toronto Maple Leafs, Boston Bruins and New York Rangers. Since 1994, the club's home rink is the United Center. The club had previously played for 65 years at Chicago Stadium.[1]"),
    array("Anaheim Ducks","ducks","The Anaheim Ducks are a professional ice hockey team based in Anaheim, California, United States. They are members of the Pacific Division of the Western Conference of the National Hockey League (NHL). Since their inception, the Ducks have played their home games at the Honda Center."),
    array("Winnipeg Jets","jets","The Winnipeg Jets are a Canadian professional ice hockey team based in Winnipeg, Manitoba. They are members of the Central Division of the Western Conference of the National Hockey League (NHL). The team is owned by True North Sports & Entertainment and plays its home games at the MTS Centre."),
    array("Vancouver Canucks","canucks_dark","The Vancouver Canucks are a Canadian professional ice hockey team based in Vancouver, British Columbia. They are members of the Pacific Division of the Western Conference of the National Hockey League (NHL). The Canucks play their home games at Rogers Arena, formerly known as General Motors Place, which has an official capacity of 18,860. Henrik Sedin is currently the captain of the team and Willie Desjardins is the head coach"),
    array("Calgary Flames","flames_dark","The Calgary Flames are a professional ice hockey team based in Calgary, Alberta, Canada. They are members of the Pacific Division of the Western Conference of the National Hockey League (NHL). The club is the third major-professional ice hockey team to represent the city of Calgary, following the Calgary Tigers (1921–27) and Calgary Cowboys (1975–77). The Flames are one of two NHL franchises in Alberta, the other being the Edmonton Oilers. The cities' proximity has led to a rivalry known as the Battle of Alberta."),
    array("Montreal Canadiens","canadiens","The Montreal Canadiens[note 1] (French: Les Canadiens de Montréal) are a professional ice hockey team based in Montreal, Quebec, Canada. They are members of the Atlantic Division in the Eastern Conference of the National Hockey League (NHL). The club's official name is le Club de hockey Canadien.[2] French nicknames for the team include Les Canadiens (or Le Canadien), Le Bleu-Blanc-Rouge, La Sainte-Flanelle,[3] Le Tricolore, Les Glorieux (or Nos Glorieux), Les Habitants, Le CH and Le Grand Club. The team's main English nickname is the Habs, an abbreviation of Les Habitants."),
    array("Ottawa Senators","senators","The Ottawa Senators (French: Sénateurs d'Ottawa) are a professional ice hockey team based in Ottawa, Ontario, Canada. They are members of the Atlantic Division of the Eastern Conference of the National Hockey League (NHL). The Senators play their home games at the 19,153 seat (20,500 capacity) Canadian Tire Centre which opened in 1996."),
    array("Tamba Bay Lightning","lightning_dark","The Tampa Bay Lightning are a professional ice hockey team based in Tampa, Florida. Established in 1992, they are members of the Atlantic Division of the Eastern Conference of the National Hockey League (NHL). Tampa Bay has one Stanley Cup championship in their history, in 2003–04.[3] They are often referred to as the Bolts, and the nickname is used on their current third jersey. They play their home games in the Amalie Arena in Tampa."),
    array("Detroit Red Wings","redwings","The Detroit Red Wings are a professional ice hockey team based in Detroit, Michigan. They are members of the Atlantic Division of the Eastern Conference of the National Hockey League (NHL), and are one of the Original Six teams of the NHL, along with the Toronto Maple Leafs, Montreal Canadiens, New York Rangers, Boston Bruins, and Chicago Blackhawks."),
    array("New York Rangers","rangers","The New York Rangers are a professional ice hockey team based in the borough of Manhattan in New York City. They are members of the Metropolitan Division of the Eastern Conference of the National Hockey League (NHL). Playing their home games at Madison Square Garden, the Rangers are one of the oldest teams in the NHL, having joined in 1926 as an expansion franchise. They are part of the group of teams referred to as the Original Six, along with the Boston Bruins, Chicago Blackhawks, Detroit Red Wings, Montreal Canadiens and Toronto Maple Leafs. The Rangers were the first NHL franchise in the United States to win the Stanley Cup,[1] which they have done four times, most recently in 1993–94.[2]"),
    array("Pitsburgh Penguins","penguins","The Pittsburgh Penguins are a professional ice hockey team based in Pittsburgh, Pennsylvania. They are members of the Metropolitan Division of the Eastern Conference of the National Hockey League (NHL). The franchise was founded in 1967 as one of the first expansion teams during the league's original expansion from six to twelve teams. The Penguins played in the Civic Arena, also known to Pittsburgh fans as The Igloo, from the time of their inception through the end of the 2009–10 season. They moved into their new arena, Consol Energy Center, to begin the 2010–11 NHL season. They have qualified for four Stanley Cup Finals, winning the Stanley Cup three times in their history – in 1991, 1992, and 2009."),
    array("New York Islanders","islanders","The New York Islanders are a professional ice hockey team based in the New York City borough of Brooklyn. They are members of the Metropolitan Division of the Eastern Conference of the National Hockey League (NHL). The team's home arena is Barclays Center. The Islanders are one of three NHL franchises in the New York City metropolitan area along with the New Jersey Devils and New York Rangers, with the Islanders' primary fan base being Long Island, Queens, and Brooklyn."),
    array("Washington Capitals","capitals_dark","The Washington Capitals are a professional ice hockey team based in Washington, D.C., that competes in the National Hockey League (NHL). They are members of the League's Metropolitan Division of the Eastern Conference. Since their founding in 1974, the Caps have won one conference championship to reach the 1998 Stanley Cup Finals, and captured eight division titles. In 1997, the team moved their home hockey rink from the suburban Capital Centre to the new Verizon Center in Washington, D.C.")


);

//st louis - minnesota
//nashville-chicago
//anaheim-winnipeg
//vancouver-calgary
//montreal-ottawa
//tampa bay-detroit
//new york R - pitsburg
//new york I - washington