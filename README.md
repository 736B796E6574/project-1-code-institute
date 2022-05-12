# Supa Sax




The "Supa Sax" website is an online presence for a music artist based in Harlem, NYC.


Users of this website will be able to hear some samples of the artists work and utilise a contact form to get in touch for any bookings. The site will also offer links to direct the user to other sites that host the artists work.




![Screenshot 2022-05-12 at 19 58 36](https://user-images.githubusercontent.com/98256205/168149131-4aced680-395f-458e-88a5-33d0ad595c06.png)

## Features

### Navigation

- Featured at the top of the page on the left of the navigation bar is the logo. It links to the home page when clicked.

- The other navigation links are to the right. They change color when the user hovers over them to alert the user that they are interactive.

- The font is coloured similar to the brass of a saxophone with a background color that was taken from the shoes of a model in the main image. 

- The navigation area clearly shows the logo so the user knows that they are in the right place. The other links are clear and their function is easy to understand for a first time user.



![Screenshot 2022-05-12 at 20 04 44](https://user-images.githubusercontent.com/98256205/168149757-109d577e-9ccf-406d-b97d-2ee1adca43b7.png)

- When the screen size is reduced to mobile size, a hamburger menu replaces the existing nav bar. The logo remains in it's position. This feature creates a clean interface on mobile. Without it, the nav bar could take up too much precious real estate and looked cluttered on smaller devices.

![Screenshot 2022-05-12 at 20 06 00](https://user-images.githubusercontent.com/98256205/168149951-2adb87c6-cc3e-4d36-8a33-d661e30b0379.png)

- The menu opens to show the links in a column and can be closed with the X.

![Screenshot 2022-05-12 at 20 06 17](https://user-images.githubusercontent.com/98256205/168149959-72d8bf0e-36df-44e0-b575-414b5d079d6f.png)

### Hero Image

- The hero image was selected for it's pleasing mix of colors that could help to keep the pallette consistent across the site. It feautures a saxophonist in the throes of a solo. The user can be sure that they have arrived at the right site.

![Screenshot 2022-05-12 at 20 30 56](https://user-images.githubusercontent.com/98256205/168153861-318b2a66-c74e-44e2-b845-d412eae77116.png)

### About 

- The left side about section features a short description of the artist. Again, this is to let the user know that they have found the correct website. 

- The right side features a positive quote about one of the artists recent performances.

![Screenshot 2022-05-12 at 20 35 48](https://user-images.githubusercontent.com/98256205/168154552-d8e89eb1-f5c4-47d0-a290-5a0817937b32.png)

### Footer

- The footer contains three links to sites that host the artists work.

- The footer links change color when hovered to add some feedback to the user experience.

### Listen Page/Section

- Features a embedded video from youTube with some samples of saxophone music which help to allow the user to sample some of the artists work should they wish to hire them. 

- Features an audio player which is set to autoplay but also loads muted to avoid impacting the user experience negatively.

![Screenshot 2022-05-12 at 20 38 55](https://user-images.githubusercontent.com/98256205/168155067-280a8043-9e41-49fc-ac0a-20179254bc02.png)

### Contact Form

- Features a first name, last name, email and message input.

- Features a submit button which loads a page confirming that the submission has been accepted. 

- The "required" attribute has been utilised to ensure that the inputs are filled with valid data before sumbission. 

- Placeholder text prompts the user to enter a value. This helps to make the user experience flow better.

![Screenshot 2022-05-12 at 20 44 18](https://user-images.githubusercontent.com/98256205/168155961-d4b418a5-193a-4da7-9f5a-5ee27a5aba80.png)

## Testing

- I have tested the website on Chrome, Firefox and Safari.

- I have tested the site at different screen sizes using Chrome Developer Tools.

- I have given the site to users for feedback on the experience.

- I have confirmed that the links work on every page.

- I have checked that the form requires valid inputs.

- I have confirmed that the audio did not play without user input.

## Bugs

### Solved Bugs

- I had an issue after deploying the hamburger menu where the links were in reverse order. I had to look into the flexbox documentation to discover the flex-direction: column-reverse; fix. 

- I had an issue where some of the elements lower down the page were riding on top of the pinned nav-bar. I solved this by using the z-index property to raise the nav-bar above the rest of the elements.

## Validator Testing

### HTML

- There were no errors found using the W3C HTML Validator.

### CSS

- There were no errors found using the W3C CSS Validator.

### Accessibility

- I confirmed that had a good accessibility score by using the Chrome Lighthouse tool.

![Screenshot 2022-05-12 at 21 32 15](https://user-images.githubusercontent.com/98256205/168163039-cfe10dee-63f1-4671-916a-1916c18127ae.png)



