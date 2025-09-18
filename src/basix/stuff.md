# Mermaid examples


## Matrix

### Organization <-> Product

||A|B|C|
|-|-|-|-|
|X|•|•||
|Y||•||
|Z|||•|



```mermaid
---
title: IT Prozess
---
flowchart RL
    S@{ shape: bolt, label: "Communication link" }
    A@{ shape: manual-file, label: "File Handling"}
    B@{ shape: manual-input, label: "User Input"}
    C@{ shape: docs, label: "Multiple Documents"}
    
    E@{ shape: paper-tape, label: "Paper Records"}

    Co@{ shape: braces, label: "Comments welcum" }


    D@{ shape: procs, label: "Process Automation"}

    A --> D
    B --> D
    C --> D
    E --> D
    S --> D

```