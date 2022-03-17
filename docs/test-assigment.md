**Backend Assignment**

**As an** Admin  
**I want to** be able to CRUD clients  
**So that** I can manage the clients to the best of my abilities  


<ins>Description</ins>  
Currently it is only possible to add a new client but we want to be able to manage the clients we add as well. The view, edit and delete icons in the 'actions' column (which appear once there is at least 1 client added to the list) are not working yet.
We want to be able to add content to the client in different languages. It must be possible to view this content page in the language of choice, and it must be possible to delete the whole client with all their data.  
  
<ins>Specifications</ins>  
- Make the `edit` icon work:
  - After adding a client, it must be possible to edit the client by clicking on the pencil icon.
  - It must be possible to edit clients name
  - Each client must have 3 items
  - Each of those items should have
    - Title
    - Paragraph
    - Type // one of [Wisdom, Philosophy, Design]
  - All the item fields should be translatable. So even a type can be different for each language
  - For the BE part only it would be enough to place all fields for all languages on a single page, and just focus on making it functional
  -  We support:
     - English
     - Dutch
     - French
  - All the fields in all the languages are required
  - After updating a client, user should be redirected to client index page

- Make the `view` icon work:
  - This option should lead to the front part of the site, where client info would be shown in the selected language (If no language is selected show the default one)
  - It must be possible to choose a language & switch between the different languages (For BE assigment only it is enough to refresh the page when choosing a language)
 
- Note: On both `edit` and `view` pages if a client has no items set, there should be default values shown. You can find the default values provided at the end of the assigment.

- Make the 'delete' icon work:
  - It must be possible to delete the whole client with all their data
  - After deleting a client, user should be redirected to client index page
  

________



**Frontend Assignment**

**As an** Admin  
**I want** the backoffice and client view to be visually appealing and user-friendly  
**So that** I can easily make use of the features without any frustrations

<ins>Description</ins>  
Currently the backoffice is visually as simple as can be. Also, there is not really paid any attention in particular to user-friendliness. We would like to introduce this so that the backoffice is easy and nice to work with.  
  
For the client view there is a design that needs to be recreated.  

<ins>Specifications</ins>  
- Please use the following technologies:
  - Vue.js
  - Inertia
  - Tailwind CSS  
  
- Backoffice
  - Edit page:
    - Because we need to set fields for all languages, we'll need a separate tab for each language
    - Changing between the tabs should not refresh the page, only the content should be changed
    - Available types should be shown in a drop-down, and they should be searchable
  - Add/Delete flows are up to you. How would you handle this?
  - Client overview page:
    - Make this overview as clear as possible. There are no rules here, we would just like to see your creativity

- Client view:
<img width="1399" alt="Schermafbeelding 2022-02-28 om 18 37 20" src="https://user-images.githubusercontent.com/7879745/156033158-6862d84d-c3f6-448f-b6e3-3a930603d554.png">

  - Background: #575F65
  - Add a header
    - Full width
    - Background: #FFFFFF
    - Show the name of the client on the left
      - Font: Montserrat (Regular) 20px #000000
    - Show the language toggle on the right
      - Font: Montserrat (Bold) 14px #FFFFFF
      - Background: #249EEA
      - When a different language is chosen, the page should not refresh but the chosen language should be changed in the content  
  - There are always 3 columns with content
    - Backround: #FFFFFF (rounded corners)
    - Make this page responsive
    - Show the title (in the correct language) in each column
      - Font: Montserrat (Bold) 50px #000000 
      - The title can be over 2 lines, no more
      - The titles of all 3 columns are always in line with eachother
    - Show the text (in the correct language) in each column
      - Font: Montserrat (Regular) 20px #000000
      - The paragraph texts of all 3 columns are always in line with eachother 
    - Show the type in each column. This is made visually with a label
      - The content of the type is up to you (Type A, B, C is dummy content)
      - The colour and look of the label which shows the type, is also up to you as long as each type has a different design to make clear which type is set
    - Show the button in each column
      - Font: Montserrat (Bold) 16px #FFFFFF
      - Background: #249EEA
      - The buttons of all 3 columns are always in line with eachother
      - Add a hover effect
      - This button has no function

________

**Important notes**
- For the sake of simplicity authentication/authorization are not the scope of this test
- We will mostly look at the code structure/quality so please focus on that. There are many ways to solve the problem, so we leave it up to you to choose your way. Try to express your creativity :)
- Default language is English
- When your work is done, please submit a PR to the master branch, naming it using the next format `{your-name}-test-assigment`


**Info that you'll need**
- Translations
  - Design
    - [EN] Design
    - [NL] Ontwerp
    - [FR] Conception
  - Wisdom
    - [EN] Wisdom
    - [NL] Wijsheid
    - [FR] Sagesse
  - Philosophy
    - [EN] Philosophy
    - [NL] Filosofie
    - [FR] Philosophie
  - Language
    - [EN] Language
    - [NL] Taal
    - [FR] Langue
  - Just a button
    - [EN] Just a button
    - [NL] Gewoon een knop
    - [FR] Juste un bouton
 
 - Client items default data
   - Item 1
     - [EN]
       - Title: Soren Kierkegaard quote
       - Paragraph: Life is not a problem to be solved, but a reality to be experienced – Soren Kierkegaard 
       - Type: Wisdom
     - [NL]
       - Title: Soren Kierkegaard citaat
       - Paragraph: Het leven is geen probleem dat moet worden opgelost, maar een realiteit die moet worden ervaren – Soren Kierkegaard 
       - Type: Wisdom
     - [FR]
       - Title: Soren Kierkegaard citation
       - Paragraph: La vie n'est pas un problème à résoudre, mais une réalité à vivre – Soren Kierkegaard 
       - Type: Wisdom
   - Item 2
     - [EN]
       - Title: Mark Twain quote
       - Paragraph: The two most important days in your life are the day you are born and the day you find out why – Mark Twain 
       - Type: Philosophy
     - [NL]
       - Title: Mark Twain citaat
       - Paragraph: De twee belangrijkste dagen in je leven zijn de dag dat je geboren wordt en de dag dat je erachter komt waarom – Mark Twain
       - Type: Philosophy
     - [FR]
       - Title: Mark Twain citation
       - Paragraph: Les deux jours les plus importants de votre vie sont le jour de votre naissance et le jour où vous découvrez pourquoi – Mark Twain 
       - Type: Philosophy
   - Item 3
     - [EN]
       - Title: R.Buckminster Fuller quote
       - Paragraph: When I am working on a problem, I never think about beauty but when I have finished, if the solution is not beautiful, I know it is wrong - R.Buckminster Fuller 
       - Type: Design
     - [NL]
       - Title: R.Buckminster Fuller citaat
       - Paragraph: Als ik aan een probleem werk, denk ik nooit aan schoonheid, maar als ik klaar ben, als de oplossing niet mooi is, weet ik dat het verkeerd is – R.Buckminster Fuller 
       - Type: Design
     - [FR]
       - Title: R.Buckminster Fuller citation
       - Paragraph: Quand je travaille sur un problème, je ne pense jamais à la beauté mais quand j'ai fini, si la solution n'est pas belle, je sais qu'elle est fausse – R.Buckminster Fuller 
       - Type: Design
