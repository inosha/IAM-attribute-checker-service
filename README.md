# IAM-attriute-checker-service
 Attribute Checker for shibboleth IDP

Shibboleth Operational Diagram
The figure below shows basic Shibboleth data flow beginning with a user requesting service from a service provider web site. Using Shibboleth, the service provider does not request the user name and password. This is done by the identity provider idp.organization.TLD which is the Shibboleth Service.

image:


<img align="center" src="https://identity.it.ufl.edu/wp-content/uploads/2012/08/shibboleth_flow.jpg" alt="INOSHA" height="20" width="20" />

Motivation...
Though SSO flow is simple & secure, issue tracking not simple... 

Before deploying this app... few shibboleth specific steps to be followed..
in a nutshell,
1)Identity provider required..

2)This has configure as the sevice privider with Shibboleth SP(handles Metadata & Attribute Mapping)  

3) apache server configurations for /secure directory

RedirectMatch    ^/$  /secure

<Location /secure>
  Authtype shibboleth
  ShibRequireSession On
  require valid-user
</Location>

4) /secure : place where authN requires and the app directory


Features:
This App render HTML from object array: $_SERVER,
Print function,
await for bruteforce attempt(Beta),