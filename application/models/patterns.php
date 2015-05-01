<?php
	/*
	Build array with the arguments as below

	array($id,$label,$header,$description,$blurb)

    escape quotes in quotes with a backslash e.g. 'I am coding on Aaron\'s computer'

	*/
    class PatternsModel{
        private $patternsTmpArr = array(
            array(
                "accordion"
                ,"Accordion"
                ,""
                ,'<p>The accordion displays collapsible content panels. They are used when presenting information in a limited space.</p><p>Click headings to expand/collapse the content. This uses javascript, but the underlying html ensures the content is still accessible without.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li><code>.accordion dt</code> to style the headings</li><li><code>.accordion dt a</code> to style the heading links</li><li><code>.accordion dd</code> to style the content boxes</li></ul></section>'
            )
            ,array(
                "audio"
                ,"Audio"
                ,""
                ,'Until now, there has not been a standard for playing audio files on a web page. HTML5 defines a new element which specifies a standard way to embed an audio file on a web page: the <audio> element.'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li>Add a class to the<code>&lt;audio&gt;</code> tag to style the player</li></ul></section>'
            )
            ,array(
                "blurb"
                ,"Blurbs"
                ,""
                ,'<p>A blurb is the name given to the short synopsis of text, sometimes accompanied by an image that links through to a full content article, news article, event or other content item.</p><p>Use blurbs when you need to list articles, or to summarise content items and encourage users to click through and read further.</p>'
                ,'<section><h3>Notes</h3><p>Blurbs should remain consistent in style, as they are such an important part of the content structure. However there are some variations:</p><ul><li>Add <code>&lt;p class="meta photo"&gt;&lt;a href="#" class="flag uclnews"&gt;UCL News&lt;/a&gt;&lt;/p&gt;&lt;/code&gt;</code> above the <code>&lt;img&gt;</code> to add a flag on news items, that links through to further news content under this category.</li></ul></section>'
            )
            ,array(
                "box"
                ,"Box"
                ,""
                ,'<p>The box style can be applied when content needs highlighting. It can be used both within main content and in the sidebar.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li><code>.box</code> to amend the colour of the top border to match your site</li></ul></section>'
            )
            ,array(
                "breadcrumb"
                ,"Breadcrumb"
                ,""
                ,'<p>Breadcrumbs are navigational devices to provide links back to the previous page the user navigated through to get to the current page.</p>'
                ,'<section><h3>Notes</h3><p>The breadcrumb should remain consistent with the rest of the UCL site for consistency. The link colour will adopt the colour you set for you site.</p><p>Include links to the homepage of your website and the pages you need to navigate through to get to the current page.</p></section>'
            )
            ,array(
                "carousel"
                ,"Carousel"
                ,""
                ,'<p>A carousel can be used to display a slideshow of images.</p>'
                ,'<section><h3>Notes</h3><p>Add/remove slides</p><ul><li>Add remove figure elements in the \'owl-carousel\' <code>div</code></li><li>Edit the <code>src</code> to change the image source</li><li>Edit the header and paragraph tags to change the copy</li></ul></section>'
            )
            ,array(
                "code"
                ,"Code"
                ,""
                ,'<p>If you need to display html code on your website you will need to format it in a particular way to ensure it doesn\'t render along with the rest of the site.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li>Putting each line of code in an ordered list using the <code>&lt;ol class="code"&gt;</code> tag will display the code with line numbers.</li></ul></section>'
            )
            ,array(
                "footer"
                ,"Footer"
                ,""
                ,'<p>The footer is one of the elements which should remain consistent across the whole of the UCL website.</p><p>The content has been specifically chosen, and like the global masthead, gives users somewhere consistent to refer back to.</p>'
                ,'<section><h3>Notes</h3><p>There are no options for customisation within the footer, please ensure this code is inserted into the bottom of your HTML files.</p></section>'
            )
            ,array(
                "form"
                ,"Form"
                ,""
                ,'<p>A form is required when you need a user to fill in and submit data. There are a lot of input options and you will need to pick and choose so that you succeed in obtaining all the information you require.</p><p>HTML5 allows for more flexible input types to be applied that provide far better experiences for users - so try to use the most appropriate one where possible.</p>'
                ,'<section><h3>Notes</h3><p>Forms should stay as consistent as possible throughout the site, however button styles can be customised:</p><ul><li>Adding the desired UCL colour name e.g. \'brightgreen\' (as explained on the Colour page of Indigo) to the button <code>class</code> will give you a styled button that fits with your site colours.</li><li>Buttons can also be styled differently, if you are expanding the foundation. Add your css styles to the <code>&lt;input&gt;</code> tag by either adding to the <code>class="btn-gradient"</code> or adding your own class name.</li></ul></section>'
            )
            ,array(
                "hero"
                ,"Hero"
                ,""
                ,'<p>The hero is a large image placed behind the page title and description that responds for varying device width. It is currently used on a number of sites including the new <a href="/prospective-students/undergraduate">UCL Undergraduate Website</a></p>'
                ,''
            )
            ,array(
                "image"
                ,"Images"
                ,""
                ,'<p>Images are defined with the <code>&lt;img&gt;</code> tag. The tag is empty, which means that it contains attributes only, and has no closing tag.</p><p>To display an image on a page, you need to use the <code>src</code> attribute, which stands for "source". The value should be the URL of the image you want to display.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li>If you need to include a heading or caption for the image, include the <code>&lt;figcaption&gt;</code> to hold and style the text.</li><li>Add the class float-left or float-right to the <code>&lt;img&gt;</code> tag to float the image to the left or the right, respectively within the content.</li></ul></section>'
            )
            /* TODO - lightbox needs to be fixed before going in here
            ,array(
                "lightbox"
                ,"Lightbox"
                ,""
                ,'<p>Allows the user to click on parts of the webpage to expand them in the browser window.</p>'
                ,''
            )*/
            ,array(
                "longform"
                ,"Longform content"
                ,""
                ,'<p>Some pages within your website may contain long articles that you feel may require too much scrolling at smaller resolutions. This can be managed using this pattern, which will cause the content to fold up into sections, giving an easier reading experience.</p>'
                ,'<section><h3>Notes</h3><p>Content needs to be split into suitable sections, with headings that can form the navigation for the content at smaller resolutions.</p><ul><li>Headings need the <code>class="accordion-header"</code> added.</li><li>The content underneath the heading needs to be wrapped in <code>&lt;div class="accordion-content"&gt;&lt;/div&gt;</code></li></ul></section>'
            )
            ,array(
                "map"
                ,"Map"
                ,""
                ,'<p>If you need to display the location of something use this code to embed a Google map in your site.</p><p>Search for the desired location within the Google maps website and replace the link as appropriate in the code.</p>'
                ,'<section><h3>Notes</h3><p>Keep the width of the map\'s <code>&lt;iframe&gt;</code> as 100% but you can change the height as needed.</p></section>'
            )
            ,array(
                "navigation"
                ,"Navigation"
                ,""
                ,'<p class="standfirst">The global masthead, UCL banner must be included in your site design. They are intended to give user somewhere consistent to refer back to whilst navigating the UCL sites. They also house the UCL search and logo.</p><p>Assign a <code>background-color</code> to the <code>&lt;div class="photograph"&gt;</code> to add a colour that will fill the UCL logo and add a colour bar underneath the banner.</p><p>Add the class <code>\'photograph-on\'</code> to the <code>&lt;div class="photograph"&gt;</code> and assign CSS for a <code>background-image</code> and <code>background-position</code> as appropriate.</p>'
                ,""
            )
            ,array(
                "pre"
                ,"Pre"
                ,""
                ,'<p>The accordion displays collapsible content panels. They are used when presenting information in a limited space.</p><p>Click headings to expand/collapse the content. This uses jQuery, but the underlying html ensures the content is still accessible without javascript.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li><code>.accordion dt</code> to style the headings</li><li><code>.accordion dt</code> a to style the heading links</li><li><code>.accordion dd</code> to style the content boxes</li></ul></section>'
            )
            ,array(
                "pullquote"
                ,"Quotes"
                ,""
                ,'<p>A pull quote element is used to display a quotation or excerpt from an article in a larger or distinctive typeface on the same page, serving to highlight a key topic.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li>Add the class quote-left or quote-right to <code>&lt;div class="pullquote"&gt;</code> to float the quote to the left or the right, respectively within the article.</li></ul></section>'
            )
            /* TODO make sure social icon png is absolute to work in iframe
            ,array(
                "social-buttons"
                ,"Social Buttons"
                ,""
                ,'Allows users to embed social icons onto their website. The pattern is responsive and allows the user to display either vertically or horizontally.'
                ,''
            )*/
            ,array(
                "table"
                ,"Tables"
                ,""
                ,'<p>Tables are defined with the <code>&lt;table&gt;</code> tag.</p><p>A table is divided into rows with the <code>&lt;tr&gt;</code> tag, and each row is divided into data cells with the <code>&lt;td&gt;</code> tag.</p><p>Tables are to be used only to display tabular data, but not to format the layout of  content within a site.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li><code>th</code> to style the table headers</li><li><code>td</code> to style the table cells</li><li><code>table</code> to style the containing table</li></ul></section>'
            )
            ,array(
                "tabs"
                ,"Tabs"
                ,""
                ,'<p>Tabs display content panels. They are used when presenting related information together in a limited space.</p><p>Click tab headings to navigate through the content. This uses jQuery, but the underlying html ensures the content is still accessible without javascript.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li><code>.tabs li</code> and <code>.tabs li.active</code> to style the tabs</li><li><code>.tabbed &gt; div</code> a to style the content areas</li></ul></section>'
            )
            ,array(
                "vcard"
                ,"Vcard"
                ,""
                ,'<p>The Vcard allows you to share contact information between devices. If you wanted to specify contact details on your web site you can the Vcard naming conventions to mark up your HTML.</p>'
                ,'<section><h3>Notes</h3><p>Assign css styles for customisation to:</p><ul><li><code>.box</code> to style the top border colour to match your site.</li></ul></section>'
            )
            ,array(
                "video"
                ,"Video"
                ,""
                ,'<p>You may need to embed video from other third party websites into your website. To keep the video responsive it needs to sit in it\'s own <code>&lt;div&gt;</code>. Just replace the link with your own.</p>'
                ,'<section><h3>Notes</h3><p>There are no options for customisation of video styles. These should usually be determined in the settings on the third party website.</p></section>'
            )
        );
        public function getPatternsArr(){
            return $this->patternsTmpArr;
        } 
    }
	
?>