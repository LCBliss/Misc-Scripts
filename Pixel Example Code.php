<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
// Insert Your Custom Audience Pixel ID below. 
fbq('init', '<FB_PIXEL_ID>');
fbq('track', 'PageView');
</script>
<!-- Insert Your Custom Audience Pixel ID below. --> 
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<FB_PIXEL_ID>&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script>
// Assuming a single item is purchased
fbq('track', 'Purchase', {
  content_name: 'Really Fast Running Shoes',
  content_category: 'Apparel & Accessories > Shoes',
  content_ids: ['1234'],
  content_type: 'product',
  value: 199.50,
  currency: 'USD'
});

// Assuming multiple items are purchased
fbq('track', 'Purchase', {
  content_ids: ['1234', '4642', '35838'],
  content_type: 'product',
  value: 247.35,
  currency: 'USD'
});

// Assuming multiple items are purchased using `contents` to provide more information
fbq('track', 'Purchase', {
  contents: [
    {
      'id': '1234',
      'quantity': 2,
      'item_price': 10
    },
    {
      'id': '4642',
      'quantity': 1,
      'item_price': 5
    }
  ],
  content_type: 'product',
  value: 25.00,
  currency: 'USD'
});
</script>