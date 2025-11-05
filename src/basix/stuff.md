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

| | ico | shortcode | ico | shortcode | |
| - | :-: | - | :-: | - | - |
| [top](#smileys--emotion) | :grinning: | `:grinning:` | :smiley: | `:smiley:` | [top](#table-of-contents) |
| [top](#smileys--emotion) | :smile: | `:smile:` | :grin: | `:grin:` | [top](#table-of-contents) |
| [top](#smileys--emotion) | :laughing: | `:laughing:` <br /> `:satisfied:` | :sweat_smile: | `:sweat_smile:` | [top](#table-of-contents) |
| [top](#smileys--emotion) | :rofl: | `:rofl:` | :joy: | `:joy:` | [top](#table-of-contents) |
| [top](#smileys--emotion) | :slightly_smiling_face: | `:slightly_smiling_face:` | :upside_down_face: | `:upside_down_face:` | [top](#table-of-contents) |
| [top](#smileys--emotion) | :melting_face: | `:melting_face:` | :wink: | `:wink:` | [top](#table-of-contents) |
| [top](#smileys--emotion) | :blush: | `:blush:` | :innocent: | `:innocent:` | [top](#table-of-contents) |