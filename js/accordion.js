

const detailsAcc = ( function() {
    "use strict";
  
    const details = document.querySelectorAll('details');
  
    if ( details.length ) {
      details.forEach( (e) => {
        const detailsSummary = e.querySelector('summary');
        const detailsContent = e.querySelector('.accourdionContent');
        let summaryHeight = parseInt( detailsSummary.offsetHeight );
  
        e.style.height = `${summaryHeight}px`;
  
        e.addEventListener('toggle', (event) => {
  
          if ( e.open ) {
            let contentHeight = parseInt( detailsContent.offsetHeight );
            let fullHeight = ( summaryHeight + contentHeight );
  
            e.style.height = `${fullHeight}px`;
          } else {
            e.style.height = `${summaryHeight}px`;
          }
        });
      });    
    }
  })();