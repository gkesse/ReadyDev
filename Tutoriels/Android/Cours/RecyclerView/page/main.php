<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Créer une liste déroulante sous Android</div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre à créer une liste déroulante sous <b>Android</b>.<br>Version Pro &amp; Industrielle. Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b>Android </b>est un système d'exploitation mobile, fondé sur le noyau Linux et développé par Google. Lancé en juin 2007 à la suite du rachat par Google en 2005 de la startup du même nom, le système avait d'abord été conçu pour les smartphones et tablettes tactiles, puis s'est diversifié dans les objets connectés et ordinateurs comme les télévisions (Android TV), les voitures (Android Auto), les Chromebook (Chrome OS qui utilise les applications Android) et les smartwatch (Wear OS). En 2015, Android est le système d'exploitation mobile le plus utilisé dans le monde, devant iOS d’Apple, avec plus de 80 % de parts de marché dans les smartphones pour l'ensemble de ses versions et adaptations. (ref. <a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://fr.wikipedia.org/wiki/Android">Wikipédia</a>)<br><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/b_cours_recyclerview.png" alt="/Tutoriels/Android/img/b_cours_recyclerview.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une liste déroulante sous Android"><a class="Link3" href="#">Créer une liste déroulante sous Android</a></h1><div class="Body3"><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1599250744051"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1599250744051");</script></div><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-Introduction"><a class="Link9" href="#Créer une liste déroulante sous Android">Introduction</a></h2><br>Une liste déroulante permet d'afficher de grands volumes de données.<br><br>Dans l'exemple qui suit, nous essayons de créer une activité qui intègre une liste déroulante.<br><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-AndroidManifest.xml"><a class="Link9" href="#Créer une liste déroulante sous Android">AndroidManifest.xml</a></h2><br>Pour la déclaration des activités de l'application. <br><br>Il définit le module (GMainActivity) comme activité principale.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!--=============================================--&gt;
&lt;manifest 
    xmlns:android="http://schemas.android.com/apk/res/android"
    package="com.pkg.readyapp"&gt;
    &lt;!--=============================================--&gt;
    &lt;application
        android:allowBackup="true"
        android:icon="@mipmap/ic_launcher"
        android:label="@string/app_name"
        android:roundIcon="@mipmap/ic_launcher_round"
        android:supportsRtl="true"
        android:theme="@style/AppTheme"&gt;
        &lt;!--=============================================--&gt;
        &lt;activity android:name=".GMainActivity"&gt;
            &lt;intent-filter&gt;
                &lt;action android:name="android.intent.action.MAIN" /&gt;
                &lt;category android:name="android.intent.category.LAUNCHER" /&gt;
            &lt;/intent-filter&gt;
        &lt;/activity&gt;
        &lt;!--=============================================--&gt;
    &lt;/application&gt;
    &lt;!--=============================================--&gt;
&lt;/manifest&gt;
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-GMainActivity.java"><a class="Link9" href="#Créer une liste déroulante sous Android">GMainActivity.java</a></h2><br>Pour la définition de l'activité principale. <br><br>Elle dérive du module (Activity) et utilise le module (GAdapter) comme adaptateur associé à la liste déroulante.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import android.os.Bundle;
import android.app.Activity;
import android.view.*;
import android.widget.*;
import android.content.*;
import androidx.recyclerview.widget.*;
import java.util.*;
//===============================================
public class GMainActivity extends Activity {
    //===============================================
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.main_layout);

        List&lt;String&gt; list = new ArrayList&lt;&gt;();
        list.add("Element 0001");
        list.add("Element 0002");
        list.add("Element 0003");
        list.add("Element 0004");
        list.add("Element 0005");
        list.add("Element 0006");
        list.add("Element 0007");
        list.add("Element 0008");
        list.add("Element 0009");
        list.add("Element 0010");
        list.add("Element 0011");
        list.add("Element 0012");
        list.add("Element 0013");
        list.add("Element 0014");
        list.add("Element 0015");
        list.add("Element 0016");
        list.add("Element 0017");
        list.add("Element 0018");
        list.add("Element 0019");
        list.add("Element 0020");
        list.add("Element 0021");
        list.add("Element 0022");
        list.add("Element 0023");
        list.add("Element 0024");
        list.add("Element 0025");
        list.add("Element 0026");
        list.add("Element 0027");
        list.add("Element 0028");
        list.add("Element 0029");

        RecyclerView recyclerView = findViewById(R.id.recyclerView);

        recyclerView.setHasFixedSize(true);
        LinearLayoutManager linearLayoutManager = new LinearLayoutManager(this);
        linearLayoutManager.setOrientation(LinearLayoutManager.VERTICAL);
        recyclerView.setLayoutManager(linearLayoutManager);

        GAdapter myAdapter = new GAdapter(list);
        recyclerView.setAdapter(myAdapter);
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-GAdapter.java"><a class="Link9" href="#Créer une liste déroulante sous Android">GAdapter.java</a></h2><br>Pour la définition de l'adaptateur associé à la liste déroulante.<br><br>Elle dérive du module (RecyclerView) et utilise une vue texte (TextView) comme widget d'affichage des éléments de la liste déroulante.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="java">//===============================================
package com.pkg.readyapp;
//===============================================
import android.view.*;
import android.widget.*;
import androidx.recyclerview.widget.*;
import androidx.annotation.*;
import java.util.*;
//===============================================
public class GAdapter extends RecyclerView.Adapter&lt;GAdapter.GViewHolder&gt; {
    //===============================================
    private List&lt;String&gt; nameList;
    //===============================================
    public GAdapter(List&lt;String&gt; list) {
        nameList = list;
    }
    //===============================================
    @Override
    public GViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        LayoutInflater inflater = LayoutInflater.from(parent.getContext());
        View view = inflater.inflate(R.layout.item_layout, parent, false);
        GViewHolder myViewHolder = new GViewHolder(view);
        return myViewHolder;
    }
    //===============================================
    @Override
    public void onBindViewHolder(@NonNull GViewHolder holder, final int position) {
        final String name = nameList.get(position);
        holder.textView.setText(name);

        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                remove(position);
            }
        });
    }
    //===============================================
    @Override
    public int getItemCount() {
        if (nameList==null) {
            return 0;
        } else {
            return nameList.size();
        }
    }
    //===============================================
    private void remove(int position) {
        nameList.remove(position);
        notifyItemRemoved(position);
    }
    //===============================================
    public class GViewHolder extends RecyclerView.ViewHolder {
        public TextView textView;

        public GViewHolder(View itemVieww) {
            super(itemVieww);
            textView = itemView.findViewById(R.id.textView);
        }
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-main_layout.xml"><a class="Link9" href="#Créer une liste déroulante sous Android">main_layout.xml</a></h2><br>Pour la définition du layout associé à l'activité principale.<br><br>Il utilise une liste déoulante (RecyclerView).<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!--=============================================--&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout 
    xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".GMainActivity"&gt;
    &lt;!--=============================================--&gt;
    &lt;androidx.recyclerview.widget.RecyclerView
        android:id="@+id/recyclerView"
        android:layout_width="match_parent"
        android:layout_height="match_parent"
        app:layout_constraintBottom_toBottomOf="parent"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent"
        android:padding="50dp"&gt;
    &lt;/androidx.recyclerview.widget.RecyclerView&gt;
    &lt;!--=============================================--&gt;
&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-item_layout.xml"><a class="Link9" href="#Créer une liste déroulante sous Android">item_layout.xml</a></h2><br>Pour la définition du layout associé aux élément de la liste déroulante.<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="xml">&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;!--=============================================--&gt;
&lt;LinearLayout xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_width="match_parent"
    android:layout_height="wrap_content"
    android:orientation="vertical"&gt;
    &lt;TextView
        android:id="@+id/textView"
        android:layout_width="match_parent"
        android:layout_height="wrap_content"
        android:text="TextView" /&gt;
&lt;/LinearLayout&gt;
&lt;!--=============================================--&gt;</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-build.gradle"><a class="Link9" href="#Créer une liste déroulante sous Android">build.gradle</a></h2><br>Pour la déclaration des dépendances associées à l'application.<br><br>Il définit les dépendances (Annotation) et (RecyclerView).<br><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="css">dependencies {
    ...
    implementation 'androidx.recyclerview:recyclerview:1.1.0'
    implementation 'androidx.annotation:annotation:1.0.2'
}</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une liste déroulante sous Android-Résultat"><a class="Link9" href="#Créer une liste déroulante sous Android">Résultat</a></h2><br><h3 class="Title8 GTitle3">Au démarrage</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_recyclerview.png" alt="/Tutoriels/Android/img/i_cours_recyclerview.png"></div><br><h3 class="Title8 GTitle3">Après déplacement de la souris vers le haut</h3><br><div class="Img3 GImage"><img src="/Tutoriels/Android/img/i_cours_recyclerview_02.png" alt="/Tutoriels/Android/img/i_cours_recyclerview_02.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Voir Aussi"><a class="Link3" href="#">Voir Aussi</a></h1><div class="Body3">Dans cette même catégorie, vous pouvez consulter aussi :<br><br><span class="GColor1" style="color:lime;">Programmation de base</span><br><br><div class="Content0 GList1"><div class="Body0" id="Loader_1600429735365"><div class="Row26">List 1 &gt; Android &gt; basics</div></div><script>loadList1("Loader_1600429735365","Android","basics");</script></div><br></div></div></div></div><br>