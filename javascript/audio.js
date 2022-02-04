 //<![CDATA[
        $(document).ready(function () {

            new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
            }, [
                {
                    title: "&#8220;All Afflitto e dolce il pianto&#8221; from Roberto Devereux - Gaetano Donizetti",
                    mp3: "/audio/sing1.mp3",
  },
                {
                    title: "&#8220;At the Whim of the Current&#8221; - Jeff Herriot",
                    mp3: "/audio/zeca3.mp3",
  },
                {
                    title: "&#8220;Sanctuary, I. Chatter/Clatter&#8221; - Roger Reynolds",
                    mp3: "/audio/thierauf1.mp3",
  },
                {
                    title: "&#8220;Á Chloris&#8221; - Reynaldo Hahn",
                    mp3: "/audio/sing2.mp3",
  },
                                {
                    title: "&#8220;Delores&#8221; - Wayne Shorter",
                    mp3: "/audio/delores.mp3",
  },
                                {
                    title: "&#8220;Variations on America&#8221; - Charles Ives",
                    mp3: "/audio/variations.mp3",
  },
                {
                    title: "&#8220;Zigeunerweisen&#8221; Op. 20 - Pablo de Sarasate ",
                    mp3: "/audio/Zeb.mp3",
  }
 ], {
                swfPath: "../dist/jplayer",
                supplied: "mp3",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true
            });

            $("#jplayer_inspector_1").jPlayerInspector({
                jPlayer: $("#jquery_jplayer_1")
            });
        });
        //]]>