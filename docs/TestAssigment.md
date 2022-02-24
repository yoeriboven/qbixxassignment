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
  - All of the item fields should be translatable. So even a type can be different for each language
  - For the BE part only it would be enough to place all fields for all lanugagues on a single page, and just focus on making it functional
  -  We support:
     - English
     - Dutch
     - French
  - All the fields in all the languages are required
  - After updating a client, user should be redirected to client index page

- Make the `view` icon work:
  - This option should lead to the front part of the site, where client info would be shown in the selected language (If no language is selected show the default one)
  - It must be possible to choose a language & switch between the different languages (For BE assigment only it is enough to refresh the page when choosing a lanugage)
 
- Note: On both `edit` and `view` pages if a client has no items set, there should be default values shown. You can find the default values provided at the end of the assigment.

- Make the 'delete' icon work:
  - It must be possible to delete the whole client with all their data
  - After deleting a client, user should be redirected to client index page
  

________



**Frontend Assignment**

**As an** Admin  
**I want** the backoffice and client view to be visually appealing and userfriendly  
**So that** I can easily make use of the features without any frustrations

<ins>Description</ins>  
Currently the backoffice and client view are visually as simple as can be. Also there is not really paid any attention in particular to user friendliness. We would like to introduce this so that the product is easy and nice to work with.

<ins>Specifications</ins>  
- Edit page
  - Because we need to set fields for all lanugages, we'll need a separate tab for each lanugage
  - Changing between the tabs should not refresh the page, only the content should be changed
  - Available types should be shown in a drop down, and they should be searchable
- Show page
  - Changing between lanugages should not refresh the page
  - Each type of the items shold have a different design
- Make the backoffice and client view visually appealing and easy to work with (keep UX and Usability in mind).
  - Make use of the following:
    - Tailwind CSS
    - Vue JS
    - Inertia

**Important notes**
- For the sake of simplicity authentication/authorization are not the scope of this test
- We will mostly look at the code structure/quality so please focus on that. There are many ways to solve the problem, so we leave it up to you to choose your way. Try to express your creativity :)
- Default language is English


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
