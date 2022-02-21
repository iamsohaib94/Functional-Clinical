<div id="popup">
    <div id="miniPop">
        <p id="close">X</p>
          <p id="pop-heading">Select Your Choice</p>
     
          <select name="Your_Choice" id="YourChoice">
              <option value="QuizResult">QuizResult</option>
              <option value="Service_QuizResult_VideoConsult">Service + QuizResult + VideoConsult</option>
          </select>
    
       
            <p id="price">TOTAL PRICE: $5</p>  
       
            
          <div id="Service">
            <p id="service-heading">Functional Clinic Aestheics Program</p>
            <p id="service-text">Personalized Regimen and Protocols with Custom Phytho-based Preparations. Personalized Aestheic Treatment Associated Alongside Duration - from 1 to 3 months</p>
          </div>
             
              <script src="https://bookeo.com/widget.js?a=41560TK6KE917C7B9AB4C8"></script>
            
              
          <!-- <form action="FCA Test.php" method="post"> -->
                <!-- <button type="submit" id="proceed">PAY TO PROCEED</button> -->
                <!-- Paypal Int $125-->
                <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
    <!-- <script src="https://www.paypal.com/sdk/js?client-id=sb&disable-funding=credit,card,venmo&components=buttons"></script> -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&disable-funding=venmo,credit,card&currency=USD" data-sdk-integration-source="button-factory"></script>
      <script>
        function initPayPalButton() {
          paypal.Buttons({
            style: {
              shape: 'rect',
              color: 'blue',
              layout: 'vertical',
              label: 'checkout',
              
            },

            createOrder: function(data, actions) {
              return actions.order.create({
                purchase_units: [{"description":"Functional Clinic Aesthetics Program","amount":{"currency_code":"USD","value":125}}]
              });
            },

            onApprove: function(data, actions) {
              return actions.order.capture().then(function(orderData) {
                
                // Full available details
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                // Show a success message within this page, e.g.
                const element = document.getElementById('paypal-button-container');
                element.innerHTML = '';
                element.innerHTML = '<h3>Thank you for your payment!</h3>';

                // Or go to another URL:  actions.redirect('thank_you.html');
                
              });
            },

            onError: function(err) {
              console.log(err);
            }
          }).render('#paypal-button-container');
        }
        initPayPalButton();
      </script>
          <!-- ---------------------------------------------------------------------- -->
      <!-- Pay Pal Int $50 -->
      <!-- <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'checkout',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"Functional Clinic Aesthetics Program","amount":{"currency_code":"USD","value":48}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script> -->
          <!-- </form> -->
    </div>
</div>