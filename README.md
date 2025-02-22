# Jewellery-Website
##Abstract:
Online Jewellery Shop is basically used to build an application program which help people to find and buy latest design of jewellery with different categories like Gold, Silver, Diamond. It is useful in the way that it makes an easier way to buy products online.

#Software Requirements Specification (SRS)

##Functional Requirements

This section provides an overview of the system's functional requirements. The system will implement various functional modules as described below:

###1. Registration
- **Description**: If a customer wishes to purchase a product, they must first register on the system. Without registration, the customer will not have the authority to buy products available on the site. However, they can browse a limited section of the site without logging in or registering.
- **Requirement**: The system must allow customers to register by providing necessary details.

###2. Login
- **Description**: Customers can log in to the system by entering a valid user ID and password to access shopping features.
- **Requirement**: The system must authenticate users based on their credentials (user ID and password).

###3. Changes to Cart
- **Description**: After logging in or registering, customers can add products to their shopping cart, place orders, or cancel orders.
- **Requirement**: The system must allow customers to modify their shopping cart (add, remove, or cancel orders).

###4. Payments
- **Description**: The system will only support cash on delivery as the payment method for customers.
- **Requirement**: The system must process orders with cash on delivery as the sole payment option.

###5. Logout
- **Description**: After completing a payment or receiving the product, the customer will be logged out of the system.
- **Requirement**: The system must automatically log out the customer after a transaction is completed.

###6. Report Generation
- **Description**: After each transaction, the system will generate a Portable Document File (PDF) report. One copy of the report will be sent to the customer's email address, and another copy will be stored in the system database for monthly transaction calculations.
- **Requirement**: The system must generate PDF reports for each transaction and distribute them as specified.
