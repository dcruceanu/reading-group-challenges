# Class Loader Component

Using what you have learned regarding the Class Loader component, you need to create a system that loads a series of classes and then write some tests to prove that they work as expected. You are free to express your creativity in what classes you use, but make sure that they are yours - you are not allowed to fetch any classes from third-party sources. We need to define:

* A PSR-0 loader and some classes for proving its usage. Make sure to cache their definitions using APC.
* A PSR-4 loader and some classes for proving its usage. Make sure to cache their definitions using XCache.
* A class structure with no namespace information, whose class map is generated and then read by the MapClassLoader. This does not need to be cached.

Make sure you write code to prove that loading these classes has worked and some tests to verify their internal workings.
