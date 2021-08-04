"use strict";

    fetch("http://www.zillow.com/webservice/ProReviews.htm?zws-id=X1-ZWz16k2mlna5fv_6ikyi&screenname=AnthonyBalsaIII")
        .then(function(resp) {
            return resp.text();
        })
        .then(function(data) {
            let parser = new DOMParser(),
                xmlDoc = parser.parseFromString(data, 'text/xml');
                console.log(xmlDoc.getElementsByTagName('review'));

                var x = document.getElementsByClassName("review");
                for (data = 0; data < x.length; data++) {
                    x.item(data).style.backgroundColor = "red";
                  }
        });
   