# Ecommistry ProductList Extension on Magento 2.1

Welcome to Ecommistry ProductList on Magento 2.1 Installation! We're glad that you are interested in our extension.

<h2>New to Magento? Need some help?</h2>
If you're not sure about the following, you probably need a little help before you start installing the Ecommistry ProductList extension:

*	Is the Magento software <a href="http://devdocs.magento.com/guides/v2.0/install-gde/basics/basics_magento-installed.html">installed already</a>?
*	What's a <a href="http://devdocs.magento.com/guides/v2.0/install-gde/basics/basics_login.html">terminal, command prompt, or Secure Shell (ssh)</a>?
*	Where's my <a href="http://devdocs.magento.com/guides/v2.0/install-gde/basics/basics_login.html">Magento server</a> and how do I access it?

<h2></h2>
<h2>Step 1: Verify your prerequisites</h2>

Use the following table to verify you have the correct prerequisites to install the Magento software.

<table>
	<tbody>
		<tr>
			<th>Prerequisite</th>
			<th>How to check</th>
			<th>For more information</th>
		</tr>
		<tr>
			<td>Magento version Community Edition 2.1</td>
			<td>Go to admin page, you can see version of Magento 2 at left bottom page, </td>
			<td>Download Magento version Community Edition 2.1 <a href="https://www.magentocommerce.com/download">here</a></td>
		</tr>
		
</tbody>
</table>

<h2>Step 2: Pre-Installation</h2>
The Magento front end relies heavily on caching to provide a faster experience to customer. This is a wonderful tool, but can wreak havoc during the installation process. To ensure that cache is not the cause of any problem, you'd better turn it off. This can be done from the admin console by navigating to the Cache Management page (System->Cache Management), selecting all caches, clicking "disable" from the drop-down menu, and submitting the change.

<a data-flickr-embed="true"  href="https://www.flickr.com/photos/138040484@N02/23017808190/in/dateposted-public/" title="cache"><img src="https://farm1.staticflickr.com/638/23017808190_eb32649597_o.png" width="1246" height="450" alt="cache"></a>

You also should run the Magento software in developer mode when you’re extending or customizing it. You can use this command line to show current mode :

php bin/magento deploy:mode:show

Use this command to change to developer mode :

php bin/magento deploy:mode:set developer

<h2>Step 3: Install and verify the installation</h2>

<strong>-Install by Composer :</strong> You can install the module by Composer (If your server supports Composer). Please go to the Magento folder and run the command:

<strong>composer require ecommistry/productlist</strong>

<strong>-Install by uploading files:</strong>

You can download as "zip" file and unzip Ecommistry ProductList extension or clone this repository by the following commands:

Use SSH: git clone git@github.com:/x.git

Use HTTPS: git clone https://github.com/x.git

When you have completed, you will have a folder containing all files of this extension. 
Then, please create the folder <strong>app/code/Ecommistry/Productlist</strong> and copy all files which you have downloaded to that folder.

 After that, please uploaded the <strong>app</strong> folder to your Magento 2 root folder.


Then you open a terminal application, change to magento root directory and use command line :

cd [magento 2 root folder]

php bin/magento setup:upgrade

Example :


Wait a second to complete installation process:

After that, if your website is in the production mode, please run the command after clear magento2 cache:

<strong>php bin/magento setup:static-content:deploy</strong>

Finally, coming back to Magento 2 admin to check if Ecommistry Productlist extension is installed properly.

After installed success, you will find additional field called 'Handle Products Display' in store -> configuration -> customer ->customer, shown in following image:
<img src="https://github.com/guozhenlin/Ecommistry/blob/master/doc/image/Limited%20Product%20Number%20Show%20Setting.png"/>

Each product has newly created attribute called "Display handle", you can enable it in following image:
<img src="https://github.com/guozhenlin/Ecommistry/blob/master/doc/image/product%20admin.png"/>

If you try to access it without login in frontend, it will redirect you to the login page, after login successful, it will have additional tab called 'Product List' in customer account page, which will have the slider to show the selected products. Shown in following image:
<img src="https://github.com/guozhenlin/Ecommistry/blob/master/doc/image/Customer%20account%20page.png"/>

If you want, you can enable it to different type of slider show according to usage in http://kenwheeler.github.io/slick/

The demo information will be added soon. 
Frontend Demo Url:
Backend Demo Url:
admin demo user:
admin demo password: 





