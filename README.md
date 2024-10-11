# -Product-Slider
The Prismasell Product Slider module for Magento 2 allows you to create a product slider widget that can be added to any page or layout in your Magento store. The slider showcases selected products with configurable options to show the product name, SKU, price, and reviews.

Overview
The Prismasell Product Slider module for Magento 2 allows you to create a product slider widget that can be added to any page or layout in your Magento store. The slider showcases selected products with configurable options to show the product name, SKU, price, and reviews.

Features
Display a product slider with selected products.
Configurable options to show/hide product details such as:
Product Name
SKU
Price
Reviews
Fully customizable widget to add sliders to any part of your store.

 **Installation Guide**
Step 1: Download the Module
First, obtain the module files and place them in the correct directory of your Magento 2 installation.

Download the module's files from the provided source.
Navigate to your Magento 2 root directory and place the files in the following directory: app/code/

**Step 2: Enable the Module
**SSH into your Magento server.

Run the following command to enable the module:
php bin/magento module:enable Prismasell_Pslider

Next, run the setup upgrade process to install the module:
php bin/magento setup:upgrade

Finally, if you're in production mode, you will need to compile and deploy static content:
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f


Step 3: Clear Cache
After installation, clear the Magento cache:
php bin/magento cache:flush
__________________________________________________________________________________________

Widget Configuration
Step 1: Add the Product Slider Widget
In the Magento Admin Panel, go to Content > Widgets.
Click Add Widget and choose the type as Prismasell Product Slider.
Choose the Design Theme and specify the Store View where you want to show the slider.
In the Layout Updates section, select where to display the widget (e.g., specific pages or layouts).
Click Save and Continue Edit.
Step 2: Configure the Product Slider
Under the Widget Options tab, you can configure the following options:
Slider Title: Set a title for the product slider.
Number of Products: Limit the number of products to display in the slider.
Show Product Name: Choose whether to display the product name.
Show SKU: Choose whether to display the product SKU.
Show Price: Choose whether to display the product price.
Show Reviews: Choose whether to display the product reviews.
After configuring the options, click Save.

Customization
Template Customization
To modify the slider’s appearance, you can edit the template file:

Template Path:
app/code/Prismasell/Pslider/view/frontend/templates/widget/slider.phtml

You can modify this file to change how the products and details (name, SKU, price, reviews) are displayed in the slider.

CSS Customization
To customize the slider’s styling, you can modify the following CSS file:

CSS Path:
app/code/Prismasell/Pslider/view/frontend/web/css/slider.css
You can adjust the layout, spacing, and other visual elements as required. or contact us at info@prismasell.com

Troubleshooting
Module Not Found Error:

Ensure that you have placed the module files correctly under app/code/Prismasell/Pslider/.
Make sure you’ve run the necessary commands: php bin/magento setup:upgrade, php bin/magento setup:di:compile.
Widget Not Appearing on the Frontend:

Double-check that the widget is assigned to the correct store view and layout in the Content > Widgets section.
Clear Magento's cache using php bin/magento cache:flush.

Support
If you encounter any issues or need assistance with the Prismasell Product Slider module, please contact the module developer for support.
Visit website: https://prismasell.com/
or email at info@prismasell.com


How to Include Products in the Slider
The Prismasell Product Slider module allows you to choose specific products to display in the slider. You can easily select these products in the Magento admin panel by using the custom attribute added to each product.

Step 1: Navigate to Product Management
In your Magento Admin Panel, go to Catalog > Products.
You’ll see a list of all your products. Choose the product you want to include in the slider by clicking on it to edit.
Step 2: Locate the "Add to Slider" Attribute
Once you're in the product edit page, scroll down or use the Attributes panel on the left to find the attribute Add to Slider.

This attribute will be either a toggle button or a dropdown with Yes/No options.

Step 3: Enable the Product for the Slider
Set the Add to Slider attribute to Yes for each product you want to include in the slider.

Once you've enabled the products, click Save in the top-right corner of the product page.

Step 4: Save and Clear Cache (Optional)
After adding products to the slider, you may need to clear the cache to see the updated slider on the frontend.

You can clear the Magento cache using the following command:
php bin/magento cache:flush

Step 5: Verify on the Frontend
Visit the page where you've placed the slider widget to verify that the products you enabled are now appearing in the slider.
The products that you set with Add to Slider = Yes will now be displayed in the slider.
Additional Information:
Limit Products: You can control the number of products displayed in the slider by setting the Number of Products option in the widget configuration.

Hide/Show Product Information: The slider allows you to show or hide product details like Name, SKU, Price, and Reviews. This can be configured within the widget settings.







