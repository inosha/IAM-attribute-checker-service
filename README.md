# IAM-attriute-checker-service
 Attribute Checker for shibboleth IDP

Shibboleth Operational Diagram
The figure below shows basic Shibboleth data flow beginning with a user requesting service from a service provider web site. Using Shibboleth, the service provider does not request the user name and password. This is done by the identity provider idp.organization.TLD which is the Shibboleth Service.

image:

Motivation...
Though SSO flow is simple & secure, issue tracking not simple... 

Before deploying this app... few shibboleth specific steps to be followed..
in a nutshell,
1)Identity provider required..

2)This has configure as the sevice privider with Shibboleth SP(handles Metadata & Attribute Mapping)  

3) 
